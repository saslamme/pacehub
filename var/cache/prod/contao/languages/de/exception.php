<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/de/exception.xlf
$GLOBALS['TL_LANG']['XPT']['error'] = 'Es ist ein Fehler aufgetreten';
$GLOBALS['TL_LANG']['XPT']['matter'] = 'Was ist das Problem?';
$GLOBALS['TL_LANG']['XPT']['howToFix'] = 'Wie kann ich das Problem lösen?';
$GLOBALS['TL_LANG']['XPT']['more'] = 'Weitere Informationen';
$GLOBALS['TL_LANG']['XPT']['hint'] = 'Legen Sie ein eigenes Twig-Template an, das das Template <em>%s</em> überschreibt, um diese Meldung anzupassen.';
$GLOBALS['TL_LANG']['XPT']['errorOccurred'] = 'Bei der Ausführung des Skriptes ist ein Fehler aufgetreten. Irgendetwas funktioniert nicht richtig.';
$GLOBALS['TL_LANG']['XPT']['errorFixOne'] = 'Öffnen Sie die aktuelle Log-Datei im Ordner <code>var/logs</code> und suchen Sie die zugehörige Fehlermeldung (normalerweise die letzte).';
$GLOBALS['TL_LANG']['XPT']['errorExplain'] = 'Die Skriptausführung wurde gestoppt, weil irgendetwas nicht korrekt funktioniert. Die eigentliche Fehlermeldung wird aus Sicherheitsgründen hinter dieser Meldung verborgen und findet sich in der aktuellen Log-Datei (siehe oben). Wenn Sie die Fehlermeldung nicht verstehen oder nicht wissen, wie das Problem zu beheben ist, besuchen Sie die <a href="%s" target="_blank" rel="noreferrer noopener">Contao-Supportseite</a>.';
$GLOBALS['TL_LANG']['XPT']['requestToken'] = 'Ungültiges Anfrage-Token';
$GLOBALS['TL_LANG']['XPT']['invalidToken'] = 'Das Request-Token konnte nicht validiert werden.';
$GLOBALS['TL_LANG']['XPT']['tokenRetry'] = 'Bitte <a href="javascript:window.location.href=window.location.href">klicken Sie hier</a> und versuchen Sie es erneut. Verwenden Sie nicht die Zurück-Schaltfläche Ihres Browsers.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainOne'] = 'Der Fehler tritt bei einer POST-Anfrage ohne gültiges Request-Token auf. In Contao 2.10 wurde die Referer-Prüfung durch ein Request-Token-System ersetzt. Wenn das Problem anhält, verwenden Sie eventuell eine inkompatible Drittanbieter-Erweiterung oder haben Ihre Contao-Installation nicht vollständig aktualisiert.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainTwo'] = 'Besuchen Sie die <a href="%s" target="_blank" rel="noreferrer noopener">Contao-Supportseite</a> für weitere Informationen.';
$GLOBALS['TL_LANG']['XPT']['unavailable'] = 'Dienst nicht verfügbar';
$GLOBALS['TL_LANG']['XPT']['maintenance'] = 'Die Webseite ist momentan nicht verfügbar. Bitte versuchen Sie es später noch einmal.';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['title'] = 'Frontend-URL kann nicht generiert werden';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['matter'] = 'Die URL konnte nicht generiert werden, weil die Route Parameter benötigt, die nicht zur Verfügung stehen. Es müssen zusätzliche Informationen (z. B. ein News-Alias) angegeben werden.';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['explain'] = 'Symfony-Routen können variable Parameter haben, die anhand regulärer Ausdrücke validiert werden. Die folgende Konfiguration konnte nicht aufgelöst werden:';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['path'] = 'Routen-Pfad';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterName'] = 'Name';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterRequirement'] = 'Bedingung (Regex)';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterDefault'] = 'Standard-Wert';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterEmpty'] = 'leer';
