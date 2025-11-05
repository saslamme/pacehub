<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/pt/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][0] = 'Editor de Rich Text';
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][1] = 'Para mais informações sobre o TinyMCE, por favor visite <a href="https://www.tiny.cloud/tinymce/" target="_blank" rel="noreferrer noopener">https://www.tiny.cloud/tinymce/</a>.';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][0] = 'Inserir tags';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][0] = 'Editor de código';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][1] = 'Para mais informações sobre o Ace, por favor visite <a href="https://ace.c9.io" target="_blank" rel="noreferrer noopener">https://ace.c9.io</a>.';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][0] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][1] = 'O Contao suporta todos os formatos de data e hora que podem ser analisados com a função PHP date(). Contudo, para assegurar que qualquer entrada pode ser transformada num carimbo de data e hora UNIX, só pode utilizar formatos numéricos de data e hora (j, d, m, n, y, Y, g, G, G, h, H, i, s) na parte de trás.<br><br><strong>Pode introduzir formatos front-end variantes na estrutura do sítio (páginas raiz do sítio).</strong><br><br><em>Aqui estão alguns exemplos de formatos de data e hora válidos</em>:';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][0] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][1] = 'YYYY-MM-DD, internacional ISO-8601 ex. 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][0] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][1] = 'MM/DD/YYYY, formato Inglês, ex. 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][0] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][1] = 'DD.MM.YYYY, formato Alemão, ex. 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][0] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][1] = 'YY-M-D, sem zeros iniciais ex. 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][0] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][1] = 'YYYYMMDD, data de registro ex. 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][0] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][1] = '24 horas, minutos e segundos ex. 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][0] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][1] = '12 horas sem zeros iniciais e minutos ex. 8:36';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][0] = 'Atributo de tamanhos';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][1] = 'O atributo HTML <code>sizes</code> define a largura de disposição pretendida da imagem, opcionalmente combinada com uma consulta multimédia. Pode utilizar qualquer valor de comprimento CSS neste atributo.<br><br>P.e. <code>(max-width: 600px) 100vw, 50vw</code> significa que a largura da imagem é 100% do viewport para ecrãs pequenos e 50% do viewport para ecrãs maiores.<br><br>E <code>(max-width: 600px) calc(100vw - 20px), 500px</code> significa que a largura da imagem é 20px mais pequena do que a do viewport para ecrãs pequenos e 500px para ecrãs maiores.<br><br>O atributo tamanhos não deve ser utilizado para a criação de estilos, mas sim para o CSS. O atributo de tamanhos não tem necessariamente de corresponder exactamente à largura real da imagem, tal como especificado no CSS.<br><br>Para mais informações sobre o atributo dos tamanhos, por favor visite <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][0] = 'Densidade de pixeis/<br>fatores de escala';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][1] = 'Se o atributo tamanhos não estiver definido, esta definição define simplesmente as densidades de píxeis que pretende suportar. As dimensões das imagens são ajustadas automaticamente. P.e.<code>1x, 1.5x, 2x</code> cria o seguinte código HTML: <code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>Se o atributo tamanhos for definido, são gerados os mesmos tamanhos de imagem mas são utilizados descritores de largura para o atributo srcset. Por exemplo, uma imagem de 200 pixel de largura com as densidades <code>1x, 1.5x, 2x</code> cria o seguinte código HTML: <code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>Para mais informações sobre o atributo srcset, por favor visite <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>.';
