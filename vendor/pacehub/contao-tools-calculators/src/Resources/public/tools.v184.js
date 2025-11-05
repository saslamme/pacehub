(function () {
  function isJQ(obj){ return !!(obj && obj.jquery); }
  function el(node){ return isJQ(node) ? node[0] : node; }
  function qs(root, sel){ var r = el(root); return r ? r.querySelector(sel) : null; }
  function qsa(root, sel){ var r = el(root); return r ? Array.prototype.slice.call(r.querySelectorAll(sel)) : []; }
  function bindMany(el, events, fn){ if (!el) return; events.split(' ').forEach(function(ev){ el.addEventListener(ev, fn, false); }); }

  function toSecTriple(h,m,s){
    var empty = [h,m,s].every(function(v){ return v==='' || v===null || v===undefined; });
    if (empty) return NaN;
    h = Number(h||0); m = Number(m||0); s = Number(s||0);
    if ([h,m,s].some(function(x){return !isFinite(x) || x<0;})) return NaN;
    return h*3600 + m*60 + s;
  }
  function toSec(hms) {
    if (!hms) return NaN;
    var parts = String(hms).trim().replace(',',':').split(':');
    var valid = parts.every(function(p){ return /^-?\\d+$/.test(String(p).trim()); });
    if (!valid) return NaN;
    parts = parts.map(function(n){ return Number(n); });
    if (parts.length === 3) return parts[0]*3600 + parts[1]*60 + parts[2];
    if (parts.length === 2) return parts[0]*60 + parts[1];
    if (parts.length === 1) return parts[0]*60;
    return NaN;
  }
  function secToHHMMSS(sec) {
    if (!isFinite(sec) || sec < 0) return '';
    var h = Math.floor(sec/3600);
    var m = Math.floor((sec%3600)/60);
    var s = Math.round(sec%60);
    function pad(x){ return String(x).padStart(2,'0'); }
    return [pad(h),pad(m),pad(s)].join(':');
  }
  function secToMMSS(sec) {
    if (!isFinite(sec) || sec <= 0) return '';
    var m = Math.floor(sec/60);
    var s = Math.round(sec%60);
    function pad(x){ return String(x).padStart(2,'0'); }
    return pad(m)+':'+pad(s);
  }
  function normPaceStr(str){
    if (!str) return '';
    var s = String(str).trim().replace(',',':').replace(';',':');
    var parts = s.split(':');
    if (parts.length === 1) {
      var mm = parseInt(parts[0],10); if (!isFinite(mm) || mm<0) return '';
      return String(mm).padStart(2,'0') + ':00';
    }
    var mm = parseInt(parts[0],10); var ss = parseInt(parts[1],10);
    if (!isFinite(mm) || mm<0) mm = 0; if (!isFinite(ss) || ss<0) ss = 0;
    if (ss>59) { mm += Math.floor(ss/60); ss = ss % 60; }
    return String(mm).padStart(2,'0') + ':' + String(ss).padStart(2,'0');
  }
  function setError(root, msg) {
    var elr = qs(root, '.tools-error');
    if (!elr) return;
    if (msg) { elr.textContent = msg; elr.hidden = false; }
    else { elr.textContent = ''; elr.hidden = true; }
  }
  function parseNum(val){ return parseFloat((val||'').toString().replace(',','.')); }

  var GROUPS = [
    { name: 'Kurze Distanzen', items: [
      {label:'400 m', km:0.4},{label:'800 m', km:0.8},{label:'1 km', km:1},{label:'2 km', km:2},{label:'3 km', km:3}]},
    { name: 'Mittlere Distanzen', items: [
      {label:'5 km', km:5},{label:'10 km', km:10},{label:'15 km', km:15},{label:'10 Meilen', km:16.09344}]},
    { name: 'Lange Distanzen', items: [
      {label:'20 km', km:20},{label:'Halbmarathon', km:21.0975},{label:'25 km', km:25},{label:'30 km', km:30},{label:'Marathon', km:42.195}]},
    { name: 'Ultra Läufe', items: [
      {label:'50 km', km:50},{label:'60 km', km:60},{label:'80 km', km:80},{label:'100 km', km:100}]},
    { name: 'Stunden Läufe', items: [
      {label:'1 Stunde', hours:1},{label:'2 Stunden', hours:2},{label:'3 Stunden', hours:3},{label:'6 Stunden', hours:6},{label:'12 Stunden', hours:12},{label:'24 Stunden', hours:24}]}
  ];

  function attachPace(root) {
    var unitRadios = qsa(root, 'input[name=\"unit\"][data-field=\"unit\"]');
    var unit = 'km';
    var kmPerMi = 1.609344;

    var dist  = qs(root, '[data-field=\"distance\"]');
    var distSlider = qs(root, '[data-field=\"distance_slider\"]');
    var hI    = qs(root, '[data-field=\"time_h\"]');
    var mI    = qs(root, '[data-field=\"time_m\"]');
    var sI    = qs(root, '[data-field=\"time_s\"]');
    var pace  = qs(root, '[data-field=\"pace\"]');
    var speed = qs(root, '[data-field=\"speed\"]');
    var speedSlider = qs(root, '[data-field=\"speed_slider\"]');

    var resDistance = qs(root, '.js-res-distance');
    var resTime     = qs(root, '.js-res-time');
    var resPace     = qs(root, '.js-res-pace');
    var resSpeed    = qs(root, '.js-res-speed');
    var presetsWrap = qs(root, '.js-presets');

    var lastChanged = null; // 'pace' | 'speed' | 'time' | 'distance'
    // Ziel-Distanz in km (wird verwendet, wenn Distanzfeld leer ist)
    var activeDistanceKm = 5; // Default 5 km, wie vom Nutzer gewünscht
    function setActiveQuick(kmVal){
      activeDistanceKm = kmVal;
      var chips = qsa(root, '.quick');
      chips.forEach(function(c){ c.classList.remove('is-active'); });
      // markiere den Chip, dessen (km) mit aktueller Einheit übereinstimmt
      chips.forEach(function(c){
        var d = parseFloat(c.getAttribute('data-distance'));
        var dKm = d; // data-distance ist immer km
        if (Math.abs(dKm - kmVal) < 1e-6){ c.classList.add('is-active'); }
      });
    }


    // ranges from data-* (base in km / kmh)
    var baseDistMin  = parseNum(el(root).getAttribute('data-distance-min'))  || 0;
    var baseDistMax  = parseNum(el(root).getAttribute('data-distance-max'))  || 100;
    var baseDistStep = parseNum(el(root).getAttribute('data-distance-step')) || 0.1;
    var baseSpeedMin  = parseNum(el(root).getAttribute('data-speed-min'))  || 0;
    var baseSpeedMax  = parseNum(el(root).getAttribute('data-speed-max'))  || 30;
    var baseSpeedStep = parseNum(el(root).getAttribute('data-speed-step')) || 0.1;

    function applyRanges(){
      if (dist && distSlider){
        if (unit==='km'){
          dist.min  = String(baseDistMin);  distSlider.min  = String(baseDistMin);
          dist.max  = String(baseDistMax);  distSlider.max  = String(baseDistMax);
          dist.step = String(baseDistStep); distSlider.step = String(baseDistStep);
        } else {
          dist.min  = String((baseDistMin/ kmPerMi).toFixed(2));  distSlider.min  = dist.min;
          dist.max  = String((baseDistMax/ kmPerMi).toFixed(2));  distSlider.max  = dist.max;
          var stepMi = baseDistStep/ kmPerMi;
          dist.step = String(stepMi.toFixed(3)); distSlider.step = String(stepMi.toFixed(3));
        }
      }
      if (speed && speedSlider){
        if (unit==='km'){
          speed.min  = String(baseSpeedMin);  speedSlider.min  = String(baseSpeedMin);
          speed.max  = String(baseSpeedMax);  speedSlider.max  = String(baseSpeedMax);
          speed.step = String(baseSpeedStep); speedSlider.step = String(baseSpeedStep);
        } else {
          speed.min  = String((baseSpeedMin/ kmPerMi).toFixed(2));  speedSlider.min  = speed.min;
          speed.max  = String((baseSpeedMax/ kmPerMi).toFixed(2));  speedSlider.max  = speed.max;
          var sStep = baseSpeedStep/ kmPerMi;
          speed.step = String(sStep.toFixed(3)); speedSlider.step = String(sStep.toFixed(3));
        }
      }
    }

    function updateUnit(newUnit){
      unit = (newUnit==='mi') ? 'mi' : 'km';
      qsa(root, '.js-unit-distance').forEach(function(n){ n.textContent = unit; });
      qsa(root, '.js-unit-speed').forEach(function(n){ n.textContent = unit==='mi'?'mph':'km/h'; });

      // convert current values
      var d = parseNum(dist && dist.value);
      var pSec = toSec(pace && pace.value);
      var v = parseNum(speed && speed.value);
      if (unit==='mi') { // switching to miles
        if (isFinite(d) && d>0) { var nd = (d / kmPerMi); dist.value = nd.toFixed(2); if (distSlider) distSlider.value = dist.value; }
        if (isFinite(pSec)) { var np = pSec*kmPerMi; if (pace) pace.value = secToMMSS(np); }
        if (isFinite(v)) { var nv = (v / kmPerMi); if (speed) speed.value = nv.toFixed(2); if (speedSlider) speedSlider.value = speed.value; }
      } else { // to kilometers
        if (isFinite(d) && d>0) { var nd2 = (d * kmPerMi); dist.value = nd2.toFixed(2); if (distSlider) distSlider.value = dist.value; }
        if (isFinite(pSec)) { var np2 = pSec/kmPerMi; if (pace) pace.value = secToMMSS(np2); }
        if (isFinite(v)) { var nv2 = (v * kmPerMi); if (speed) speed.value = nv2.toFixed(2); if (speedSlider) speedSlider.value = speed.value; }
      }
      applyRanges();
      recalc();
    }

    unitRadios.forEach(function(r){ r.addEventListener('change', function(){ if (r.checked) updateUnit(r.value); }); });

    // quick distance chips als Ziel-Distanz
    qsa(root, '.quick').forEach(function(btn){
      btn.addEventListener('click', function(){
        var kmVal = parseNum(btn.getAttribute('data-distance')); // immer in km
        setActiveQuick(kmVal);
        // Wenn Nutzer sichtbar die Distanz ändern will, übernehmen wir auch ins Feld
        var valDisp = (unit==='mi') ? (kmVal/ kmPerMi) : kmVal;
        if (dist) dist.value = String(valDisp);
        if (distSlider) distSlider.value = String(valDisp);
        lastChanged = 'distance';
        recalc();
      });
    });

    // preset chips
    qsa(root, '.preset').forEach(function(btn){
      btn.addEventListener('click', function(){
        var d = parseNum(btn.getAttribute('data-distance'));
        var t = btn.getAttribute('data-time'); // "hh:mm:ss"
        if (unit==='mi') d = d / kmPerMi;
        if (dist) dist.value = String(d);
        if (distSlider) distSlider.value = String(d);
        var parts = (t||'').split(':');
        if (hI) hI.value = parts[0]||'0';
        if (mI) mI.value = parts[1]||'0';
        if (sI) sI.value = parts[2]||'0';
        if (pace) pace.value = '';
        if (speed) speed.value = '';
        lastChanged = 'time';
        recalc();
      });
    });

    // listeners (robust)
    if (dist && distSlider) {
      bindMany(dist, 'input change blur', function(){
        var v = parseNum(dist.value);
        if (isFinite(v)) distSlider.value = v;
        lastChanged = 'distance';
        recalc();
      });
      bindMany(distSlider, 'input change', function(){
        dist.value = distSlider.value;
        lastChanged = 'distance';
        recalc();
      });
    }
    if (speed && speedSlider) {
      bindMany(speed, 'input change blur', function(){
        var v = parseNum(speed.value);
        if (isFinite(v)) speedSlider.value = v;
        lastChanged = 'speed';
        recalc();
      });
      bindMany(speedSlider, 'input change', function(){
        speed.value = speedSlider.value;
        lastChanged = 'speed';
        recalc();
      });
      speed.addEventListener('keyup', function(e){ if (e.key==='Enter'){ lastChanged='speed'; recalc(); } });
    }
    if (pace) {
      bindMany(pace, 'input change blur', function(){
        if (event && (event.type==='blur' || event.type==='change')) {
          var norm = normPaceStr(pace.value);
          if (norm) pace.value = norm;
        }
        lastChanged = 'pace';
        recalc();
      });
      pace.addEventListener('keyup', function(e){
        if (e.key==='Enter'){
          var norm = normPaceStr(pace.value);
          if (norm) pace.value = norm;
          lastChanged='pace'; recalc();
        }
      });
    }
    qsa(root, '[data-field=\"time_h\"],[data-field=\"time_m\"],[data-field=\"time_s\"]').forEach(function(inp){
      bindMany(inp, 'input change blur', function(){
        lastChanged = 'time';
        recalc();
      });
    });

    function buildGroups(pacePerKm, Vkmh){
      if (!presetsWrap) return;
      presetsWrap.innerHTML = '';
      GROUPS.forEach(function(group){
        var frag = document.createDocumentFragment();
        var sectionTitle = document.createElement('div'); sectionTitle.className = 'results-subtitle'; sectionTitle.textContent = group.name;
        frag.appendChild(sectionTitle);
        var grid = document.createElement('div'); grid.className = 'results-grid';
        group.items.forEach(function(item){
          var card = document.createElement('div'); card.className = 'card';
          var t = document.createElement('div'); t.className='t';
          var v = document.createElement('div'); v.className='v';
          t.textContent = item.label;
          if (item.km != null && isFinite(pacePerKm)) {
            var tsec = item.km * pacePerKm;
            v.textContent = secToHHMMSS(tsec);
          } else if (item.hours != null && (isFinite(Vkmh) || isFinite(pacePerKm))) {
            var distKm = isFinite(Vkmh) ? (Vkmh * item.hours) : ((item.hours*3600) / pacePerKm);
            var display = (unit==='mi') ? (distKm/1.609344) : distKm;
            var suffix = (unit==='mi') ? ' mi' : ' km';
            v.textContent = (Math.round(display*100)/100).toFixed(2).replace('.', ',') + suffix;
          } else {
            v.textContent = '–';
          }
          card.appendChild(t); card.appendChild(v);
          grid.appendChild(card);
        });
        frag.appendChild(grid);
        presetsWrap.appendChild(frag);
      });
    }

    function recalc(){
      setError(root, '');
      var dUser = parseNum(dist && dist.value);
      var T = toSecTriple(hI && hI.value, mI && mI.value, sI && sI.value);
      var P_in = toSec(pace && pace.value);
      var V_in = parseNum(speed && speed.value);

      // Normalize to km / sec-per-km / kmh
      var D = (isFinite(dUser) && dUser>0) ? (unit==='mi' ? dUser*kmPerMi : dUser) : NaN; // km
      var haveD = isFinite(D);
      var haveT = isFinite(T);
      var haveP = isFinite(P_in);
      var haveV = isFinite(V_in);

      var paceS = haveP ? ((unit==='mi') ? P_in*kmPerMi : P_in) : NaN; // sec per km
      var Vkmh  = haveV ? ((unit==='mi') ? V_in*kmPerMi : V_in) : NaN; // km/h

      // Resolve P and V
      if (isFinite(paceS) && isFinite(Vkmh)) {
        if (lastChanged === 'pace') Vkmh = 3600 / paceS;
        else paceS = 3600 / Vkmh; // default: speed wins
      } else if (isFinite(paceS) && !isFinite(Vkmh)) {
        Vkmh = 3600 / paceS;
      } else if (!isFinite(paceS) && isFinite(Vkmh)) {
        paceS = 3600 / Vkmh;
      }

      var timeS = isFinite(T) ? T : NaN;

      // Pairwise: any two determine the rest
      if (isFinite(D) && isFinite(timeS)) {
        paceS = timeS / D; Vkmh = 3600 / paceS;
      } else if (isFinite(D) && isFinite(paceS)) {
        timeS = D * paceS; Vkmh = 3600 / paceS;
      } else if (isFinite(D) && isFinite(Vkmh)) {
        paceS = 3600 / Vkmh; timeS = D * paceS;
      } else if (isFinite(timeS) && isFinite(paceS)) {
        D = timeS / paceS; Vkmh = 3600 / paceS;
      } else if (isFinite(timeS) && isFinite(Vkmh)) {
        paceS = 3600 / Vkmh; D = timeS / paceS;
      } else if (!isFinite(D) && (isFinite(paceS) || isFinite(Vkmh))) {
        // Distanz leer, aber Pace/Speed vorhanden -> Ziel-Distanz verwenden
        var DZiel = activeDistanceKm; // km
        if (isFinite(DZiel) && DZiel>0) {
          D = DZiel;
          if (!isFinite(paceS) && isFinite(Vkmh)) paceS = 3600 / Vkmh;
          timeS = D * paceS;
        }
      } // if only pace+speed present -> groups still render, inputs sync below

      // Update displays
      if (resDistance) {
        if (isFinite(D)) {
          var Ddisp = (unit==='mi') ? (D/1.609344) : D;
          resDistance.textContent = Ddisp.toFixed(2) + ' ' + (unit==='mi'?'mi':'km');
        } else if (isFinite(activeDistanceKm)) {
          var Dz = (unit==='mi') ? (activeDistanceKm/1.609344) : activeDistanceKm;
          resDistance.textContent = Dz.toFixed(2) + ' ' + (unit==='mi'?'mi':'km');
        } else resDistance.textContent = '–';
      }
      if (resTime)  resTime.textContent  = isFinite(timeS) ? secToHHMMSS(timeS) : '–';
      if (resPace)  resPace.textContent  = isFinite(paceS) ? (secToMMSS( (unit==='mi') ? paceS*1.609344 : paceS ) + ' min/' + (unit==='mi'?'mi':'km')) : '–';
      if (resSpeed) resSpeed.textContent = isFinite(Vkmh)  ? ( ((unit==='mi') ? (Vkmh/1.609344) : Vkmh).toFixed(2) + ' ' + (unit==='mi'?'mph':'km/h')) : '–';

      // Sync inputs (force based on lastChanged to keep fields consistent)
      if (pace && isFinite(paceS)) {
        var pOut = (unit==='mi') ? paceS/1.609344 : paceS;
        if (lastChanged==='speed' || !haveP) {
          pace.value = secToMMSS(pOut);
        }
      }
      if (speed && isFinite(Vkmh)) {
        var vOut = (unit==='mi') ? (Vkmh/1.609344) : Vkmh;
        if (lastChanged==='pace' || !haveV) {
          speed.value = vOut.toFixed(2);
          if (speedSlider) speedSlider.value = speed.value;
        }
      }
      if (hI && mI && sI && !haveT && isFinite(timeS)) {
        var h = Math.floor(timeS/3600), m = Math.floor((timeS%3600)/60), s = Math.round(timeS%60);
        hI.value = h; mI.value = m; sI.value = s;
      }
      if (dist && distSlider && !isFinite(dUser) && isFinite(D)) {
        var dOut = (unit==='mi') ? (D/1.609344) : D; dist.value = dOut.toFixed(2); distSlider.value = dist.value;
      }

      buildGroups(paceS, Vkmh);
    }

    // Reset button (falls vorhanden)
    var btnReset = qs(root, '[data-action=\"reset\"]');
    if (btnReset) btnReset.addEventListener('click', function(e){
      e.preventDefault();
      if (dist) dist.value=''; if (distSlider) distSlider.value = distSlider.min || '0';
      if (hI) hI.value=''; if (mI) mI.value=''; if (sI) sI.value='';
      if (pace) pace.value=''; if (speed) speed.value=''; if (speedSlider) speedSlider.value = speedSlider.min || '0';
      lastChanged = null;
      var defBtn = qs(root, '.preset[data-distance=\"10\"][data-time=\"00:50:00\"]');
      if (defBtn) defBtn.click();
      recalc();
    });

    // Init
    var initialUnit = el(root).getAttribute('data-unit')==='mi'?'mi':'km';
    unitRadios.forEach(function(r){ r.checked = (r.value===initialUnit); });
    applyRanges();
    updateUnit(initialUnit);

    var defaultPresetBtn = qs(root, '.preset[data-distance=\"10\"][data-time=\"00:50:00\"]');
    if (defaultPresetBtn) defaultPresetBtn.click();
    recalc();
  }


  function attachVO2(root){
    var methodRadios = qsa(root, 'input[data-field="vo2_method"]');
    var cooperWrap = qs(root, '.vo2-cooper');
    var hrWrap = qs(root, '.vo2-hr');
    var cooperInput = qs(root, '[data-field="cooper_m"]');
    var hrRest = qs(root, '[data-field="hr_rest"]');
    var hrMax  = qs(root, '[data-field="hr_max"]');
    var out = qs(root, '.js-vo2');
    var btnReset = qs(root, '[data-action="reset"]');

    function showMethod(m){
      if (m==='hr'){ hrWrap.style.display=''; cooperWrap.style.display='none'; }
      else { cooperWrap.style.display=''; hrWrap.style.display='none'; }
    }

    function calc(){
      var method = 'cooper';
      methodRadios.forEach(function(r){ if (r.checked) method = r.value; });
      var vo2 = NaN;

      if (method==='cooper'){
        var m = parseFloat((cooperInput && cooperInput.value) || '');
        if (isFinite(m) && m>0){
          vo2 = (m - 504.9)/44.73;
        }
      } else {
        var r = parseFloat((hrRest && hrRest.value) || '');
        var mx = parseFloat((hrMax && hrMax.value) || '');
        if (isFinite(r) && r>0 && isFinite(mx) && mx>0){
          vo2 = 15.3 * (mx / r);
        }
      }

      if (out) out.textContent = isFinite(vo2) ? vo2.toFixed(1) + ' ml·kg⁻¹·min⁻¹' : '–';
    }

    methodRadios.forEach(function(r){
      r.addEventListener('change', function(){
        showMethod(r.value);
        calc();
      });
    });

    // Cooper quicks
    qsa(root, '.quick[data-cooper]').forEach(function(btn){
      btn.addEventListener('click', function(){
        if (cooperInput) cooperInput.value = String(btn.getAttribute('data-cooper'));
        calc();
      });
    });

    if (cooperInput) cooperInput.addEventListener('input', calc);
    if (hrRest) hrRest.addEventListener('input', calc);
    if (hrMax)  hrMax.addEventListener('input', calc);

    if (btnReset) btnReset.addEventListener('click', function(e){
      e.preventDefault();
      // Defaults
      if (cooperInput) cooperInput.value = '3000';
      if (hrRest) hrRest.value = '60';
      if (hrMax)  hrMax.value  = '190';
      methodRadios.forEach(function(r){ r.checked = (r.value==='cooper'); });
      showMethod('cooper');
      calc();
    });

    // Initialize defaults so user sees an immediate result
    if (cooperInput && !cooperInput.value) cooperInput.value = '3000';
    if (hrRest && !hrRest.value) hrRest.value = '60';
    if (hrMax && !hrMax.value)   hrMax.value  = '190';
    showMethod('cooper');
    calc();
  }


  function attachVDOT(root){
    var selDist = qs(root, '[data-field="vdot_distance"]');
    var hI = qs(root, '[data-field="vdot_h"]');
    var mI = qs(root, '[data-field="vdot_m"]');
    var sI = qs(root, '[data-field="vdot_s"]');
    var outVDOT = qs(root, '.js-vdot');
    var outPace = qs(root, '.js-vdot-pace');
    var eqWrap = qs(root, '.js-vdot-equivalents');
    var btnReset = qs(root, '[data-action="reset"]');

    function toSecTriple(h,m,s){
      var empty = [h,m,s].every(function(v){ return v==='' || v===null || v===undefined; });
      if (empty) return NaN;
      h = Number(h||0); m = Number(m||0); s = Number(s||0);
      if ([h,m,s].some(function(x){return !isFinite(x) || x<0;})) return NaN;
      return h*3600 + m*60 + s;
    }
    function secToMMSS(sec) {
      if (!isFinite(sec) || sec <= 0) return '';
      var m = Math.floor(sec/60);
      var s = Math.round(sec%60);
      function pad(x){ return String(x).padStart(2,'0'); }
      return pad(m)+':'+pad(s);
    }
    function paceFromTimeAndKm(tSec, km){
      if (!isFinite(tSec) || !isFinite(km) || km<=0) return NaN;
      return tSec / km; // sec per km
    }

    function vdotFrom(km, tSec){
      if (!isFinite(km) || !isFinite(tSec) || km<=0 || tSec<=0) return NaN;
      var meters = km * 1000.0;
      var tMin = tSec / 60.0;
      var v = meters / tMin; // m/min
      var VO2 = -4.60 + 0.182258 * v + 0.000104 * v * v;
      var pct = 0.8 + 0.1894393 * Math.exp(-0.012778 * tMin) + 0.2989558 * Math.exp(-0.1932605 * tMin);
      return VO2 / pct;
    }

    function timeFromVDOTandKm(vdot, km){
      // invert approximately by iterative search on t (sec), minimizing |vdotFrom(km,t) - vdot|
      if (!isFinite(vdot) || vdot<=0 || !isFinite(km) || km<=0) return NaN;
      var t = km * 240; // initial guess: 4:00/km
      for (var i=0;i<40;i++){
        var f = vdotFrom(km, t) - vdot;
        // numerical derivative df/dt approx
        var dt = 1.0;
        var f2 = vdotFrom(km, t+dt) - vdot;
        var df = (f2 - f)/dt;
        if (!isFinite(df) || Math.abs(df) < 1e-7) break;
        t = t - f/df;
        if (t < km*150) t = km*150; // cap ~2:30/km
        if (t > km*720) t = km*720; // cap ~12:00/km
      }
      return t;
    }

    function renderEquivalents(vdot){
      if (!eqWrap) return;
      eqWrap.innerHTML = '';
      if (!isFinite(vdot)) return;
      var dists = [
        {label:'3 km', km:3},
        {label:'5 km', km:5},
        {label:'10 km', km:10},
        {label:'Halbmarathon', km:21.0975},
        {label:'Marathon', km:42.195}
      ];
      var grid = document.createElement('div'); grid.className = 'results-grid';
      dists.forEach(function(d){
        var t = timeFromVDOTandKm(vdot, d.km);
        var card = document.createElement('div'); card.className = 'card';
        var tEl = document.createElement('div'); tEl.className = 't'; tEl.textContent = d.label;
        var vEl = document.createElement('div'); vEl.className = 'v'; vEl.textContent = (isFinite(t) ? secToHHMMSS(t) : '–');
        card.appendChild(tEl); card.appendChild(vEl); grid.appendChild(card);
      });
      eqWrap.appendChild(grid);
    }

    function secToHHMMSS(sec) {
      if (!isFinite(sec) || sec < 0) return '';
      var h = Math.floor(sec/3600);
      var m = Math.floor((sec%3600)/60);
      var s = Math.round(sec%60);
      function pad(x){ return String(x).padStart(2,'0'); }
      return [pad(h),pad(m),pad(s)].join(':');
    }

    function recalc(){
      var km = parseFloat((selDist && selDist.value) || '5');
      var t = toSecTriple(hI && hI.value, mI && mI.value, sI && sI.value);
      var vdot = vdotFrom(km, t);
      if (outVDOT) outVDOT.textContent = isFinite(vdot) ? vdot.toFixed(1) : '–';

      var paceSec = paceFromTimeAndKm(t, km);
      if (outPace) outPace.textContent = isFinite(paceSec) ? secToMMSS(paceSec) : '–';

      renderEquivalents(vdot);
    }

    if (selDist) selDist.addEventListener('change', recalc);
    [hI,mI,sI].forEach(function(inp){ if (inp) inp.addEventListener('input', recalc); });

    if (btnReset) btnReset.addEventListener('click', function(e){
      e.preventDefault();
      if (selDist) selDist.value = '5.0';
      if (hI) hI.value = '0'; if (mI) mI.value = '22'; if (sI) sI.value = '30';
      recalc();
    });

    // Defaults to show immediate result
    if (selDist && !selDist.value) selDist.value = '5.0';
    if (hI && !hI.value) hI.value = '0';
    if (mI && !mI.value) mI.value = '22';
    if (sI && !sI.value) sI.value = '30';
    recalc();
  }

  function attachBikeWatt(root){
    var speedInput = qs(root, '[data-field="bike_speed"]');
    var speedSlider = qs(root, '[data-field="bike_speed_slider"]');
    var gradientInput = qs(root, '[data-field="bike_gradient"]');
    var riderWeightInput = qs(root, '[data-field="bike_weight_rider"]');
    var bikeWeightInput = qs(root, '[data-field="bike_weight_bike"]');
    var cdaInput = qs(root, '[data-field="bike_cda"]');
    var crrInput = qs(root, '[data-field="bike_crr"]');
    var densityInput = qs(root, '[data-field="bike_density"]');
    var efficiencyInput = qs(root, '[data-field="bike_efficiency"]');
    var windInput = qs(root, '[data-field="bike_wind"]');

    var totalOut = qs(root, '.js-bike-watt-total');
    var aeroOut = qs(root, '.js-bike-watt-aero');
    var rollingOut = qs(root, '.js-bike-watt-rolling');
    var gravityOut = qs(root, '.js-bike-watt-gravity');

    var btnReset = qs(root, '[data-action="reset"]');

    function num(input, fallback){
      var val = parseFloat((input && input.value) || '');
      return isFinite(val) ? val : fallback;
    }

    function sync(from, to){
      if (!from || !to) return;
      to.value = from.value;
    }

    var g = 9.80665;

    function formatW(w){
      if (!isFinite(w)) return '–';
      var rounded = Math.round(w);
      return rounded.toString() + ' W';
    }

    function displayResults(total, aero, rolling, gravity){
      if (totalOut) totalOut.textContent = formatW(total);
      if (aeroOut) aeroOut.textContent = formatW(aero);
      if (rollingOut) rollingOut.textContent = formatW(rolling);
      if (gravityOut) gravityOut.textContent = formatW(gravity);
    }

    function recalc(){
      var speedKmh = num(speedInput, NaN);
      if (speedSlider && speedInput && document.activeElement === speedSlider){
        speedInput.value = speedSlider.value;
        speedKmh = num(speedInput, NaN);
      }

      var gradientPct = num(gradientInput, 0);
      var riderKg = num(riderWeightInput, 75);
      var bikeKg = num(bikeWeightInput, 9);
      var cda = num(cdaInput, 0.32);
      var crr = num(crrInput, 0.005);
      var density = num(densityInput, 1.225);
      var effPct = num(efficiencyInput, 95);
      var windKmh = num(windInput, 0);

      var mass = riderKg + bikeKg;
      var efficiency = effPct / 100;

      if (!isFinite(speedKmh) || speedKmh <= 0){
        setError(root, 'Bitte eine gültige Geschwindigkeit eingeben.');
        displayResults(NaN, NaN, NaN, NaN);
        return;
      }
      if (!isFinite(mass) || mass <= 0){
        setError(root, 'Bitte Fahrer- und Radgewicht prüfen.');
        displayResults(NaN, NaN, NaN, NaN);
        return;
      }

      if (!isFinite(cda) || cda <= 0) cda = 0.32;
      if (!isFinite(crr) || crr <= 0) crr = 0.005;
      if (!isFinite(density) || density <= 0) density = 1.225;
      if (!isFinite(efficiency) || efficiency <= 0) efficiency = 0.95;
      if (efficiency > 1) efficiency = efficiency / 100;
      if (efficiency <= 0 || efficiency > 1) efficiency = 0.95;

      var speedMs = speedKmh / 3.6;
      var windMs = windKmh / 3.6;
      var slope = gradientPct / 100;
      var theta = Math.atan(slope);

      var vRel = speedMs + windMs;
      var vRelAbs = Math.abs(vRel);

      var forceGravity = mass * g * Math.sin(theta);
      var forceRolling = mass * g * Math.cos(theta) * crr;
      var forceAero = 0.5 * density * cda * vRelAbs * vRelAbs;
      if (vRel < 0) forceAero = -forceAero;

      var powerGravity = forceGravity * speedMs;
      var powerRolling = forceRolling * speedMs;
      var powerAero = forceAero * vRelAbs;

      var wheelPower = powerGravity + powerRolling + powerAero;
      var riderPower = wheelPower / efficiency;

      if (riderPower < 0){
        riderPower = 0;
      }

      setError(root, null);

      displayResults(riderPower, Math.max(0, powerAero / efficiency), Math.max(0, powerRolling / efficiency), Math.max(0, powerGravity / efficiency));
    }

    if (speedInput && speedSlider){
      speedInput.addEventListener('input', function(){ sync(speedInput, speedSlider); recalc(); });
      speedSlider.addEventListener('input', function(){ sync(speedSlider, speedInput); recalc(); });
    }

    [gradientInput, riderWeightInput, bikeWeightInput, cdaInput, crrInput, densityInput, efficiencyInput, windInput].forEach(function(inp){
      if (inp) inp.addEventListener('input', recalc);
    });

    if (btnReset){
      btnReset.addEventListener('click', function(e){
        e.preventDefault();
        if (speedInput) speedInput.value = '30';
        if (speedSlider) speedSlider.value = '30';
        if (gradientInput) gradientInput.value = '0';
        if (riderWeightInput) riderWeightInput.value = '75';
        if (bikeWeightInput) bikeWeightInput.value = '9';
        if (cdaInput) cdaInput.value = '0.32';
        if (crrInput) crrInput.value = '0.005';
        if (densityInput) densityInput.value = '1.225';
        if (efficiencyInput) efficiencyInput.value = '95';
        if (windInput) windInput.value = '0';
        recalc();
      });
    }

    recalc();
  }

  function boot(){
    qsa(document, '[data-calculator]').forEach(function(root){
      var type = el(root).getAttribute('data-calculator');
      if (type === 'pace') attachPace(root);
      if (type === 'vo2max') attachVO2(root);
      if (type === 'vdot') attachVDOT(root);
      if (type === 'bike_watt') attachBikeWatt(root);
    });
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
  else boot();
})();
