<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/fr/explain.xlf
$GLOBALS['TL_LANG']['XPL']['insertTags'][0][0] = 'Éditeur de texte riche';
$GLOBALS['TL_LANG']['XPL']['insertTags'][1][0] = 'Balises d\'insertion';
$GLOBALS['TL_LANG']['XPL']['insertTags'][2][0] = 'Éditeur de code';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][0] = 'colspan';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][0][1] = 'Contao supporte tout format de date et d\'heure basé sur la fonction date() de PHP. Cependant, pour s\'assurer que n\'importe quelle entrée puisse être transformée en format horaire d\'UNIX, vous pouvez seulement employer un format de date et d\'heure numérique (j, d, m, n, y, Y, g, G, h, H, I, s) dans les coulisses.<br /><br /><strong>Vous pouvez utiliser divers formats de scène dans la structure du site (pages racines).</strong><br /><br /><em>Voici quelques exemples de formats de date et d\'heure valides </em > :';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][0] = 'Y-m-d';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][1][1] = 'YYYY-MM-DD, norme internationale ISO-8601, ex. : 2005-01-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][0] = 'm/d/Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][2][1] = 'MM/ JJ/AAAA, format anglais, par exemple 01/28/2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][0] = 'd.m.Y';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][3][1] = 'JJ.MM.AAAA, format allemand, par exemple 28.01.2005';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][0] = 'y-n-j';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][4][1] = 'YY-M-D, sans le zéro des mois, ex. : 05-1-28';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][0] = 'Ymd';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][5][1] = 'YYYYMMDD, cachet horaire, ex. : 20050128';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][0] = 'H:i:s';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][6][1] = '24 heures, minutes et secondes, ex. : 20:36:59';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][0] = 'g:i';
$GLOBALS['TL_LANG']['XPL']['dateFormat'][7][1] = '12 heures sans zéros initiaux ex. : 8:36';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][0] = 'Attribut tailles (sizes)';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][0][1] = 'L\'attribut HTML <code>sizes</code> définit la largeur prévue de l\'image, éventuellement combinée à une requête média. Vous pouvez utiliser n\'importe quelle valeur de longueur CSS dans cet attribut.<br><br>par exemple. <code>(max-width: 600px) 100vw, 50vw</code> signifie que la largeur de l\'image est égale à 100 % de la fenêtre d\'affichage pour les petits écrans et à 50 % de la fenêtre d\'affichage pour les écrans plus larges.<br><br>et <code>(max-width: 600px) calc(100vw - 20px), 500px</code> signifie que la largeur de l\'image est inférieure de 20px à la fenêtre d\'affichage pour les petits écrans et de 500px pour les écrans plus larges.<br><br>L\'attribut sizes ne doit pas nécessairement correspondre exactement à la largeur réelle de l\'image telle qu\'elle est spécifiée dans le CSS.<br><br>Pour plus d\'informations sur l\'attribut sizes, veuillez consulter le site <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-sizes" target="_blank" rel="noreferrer noopener">w3.org</a>.';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][0] = 'Densité de pixels/<br>facteurs d\'échelle';
$GLOBALS['TL_LANG']['XPL']['imageSizeDensities'][1][1] = 'Si l\'attribut sizes n\'est pas défini, ce paramètre définit simplement les densités de pixels que vous souhaitez prendre en charge. Les dimensions des images sont ajustées automatiquement. Par exemple, <code>1x, 1.5x, 2x</code> crée le code HTML suivant : <code>&lt;img srcset="img-a.jpg 1x, img-b.jpg 1.5x, img-c.jpg 2x"&gt;</code><br><br>Si l\'attribut sizes est défini, les mêmes tailles d\'image sont générées mais des valeurs de largeur sont utilisés pour l\'attribut srcset. Par exemple, une image de 200 pixels de large avec les densités <code>1x, 1.5x, 2x</code> crée le code HTML suivant : <code>&lt;img srcset="img-a.jpg 200w, img-b.jpg 300w, img-c.jpg 400w"&gt;</code><br><br>Pour plus d\'informations sur l\'attribut srcset, veuillez consulter le site <a href="https://www.w3.org/TR/2016/PR-html51-20160915/semantics-embedded-content.html#element-attrdef-img-srcset" target="_blank" rel="noreferrer noopener">w3.org</a>.';
