<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/pt/exception.xlf
$GLOBALS['TL_LANG']['XPT']['error'] = 'Ocorreu um erro';
$GLOBALS['TL_LANG']['XPT']['matter'] = 'Qual é o problema?';
$GLOBALS['TL_LANG']['XPT']['howToFix'] = 'Como posso consertar o problema?';
$GLOBALS['TL_LANG']['XPT']['more'] = 'Conte-me mais, por favor';
$GLOBALS['TL_LANG']['XPT']['hint'] = 'Para personalizar este aviso, crie um Twig template personalizado em substituição <em>%s</em>.';
$GLOBALS['TL_LANG']['XPT']['errorOccurred'] = 'Um erro ocorreu ao executar este script. Algo não está certo.';
$GLOBALS['TL_LANG']['XPT']['errorFixOne'] = 'Abra o ficheiro de log atual em <code>var/logs</code> e encontre a mensagem de erro associada (normalmente a última).';
$GLOBALS['TL_LANG']['XPT']['requestToken'] = 'Token de requisição inválido';
$GLOBALS['TL_LANG']['XPT']['invalidToken'] = 'O token de requisição não pode ser verificado.';
$GLOBALS['TL_LANG']['XPT']['tokenRetry'] = 'Por favor<a href="javascript:window.location.href=window.location.href">clique aquie</a> e tente novamente. Não utilize o botão voltar do seu navegador.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainOne'] = 'Este erro ocorre quando existe um pedido POST sem um token de autenticação válido. No Contao 2.10 a verificação por "referer" foi substituída por uma verificação por tokens. Caso o problema persista, pode estar a utilizar uma extensão de terceiros não compatível ou não ter correctamente actualizado a sua instalação Contao.';
$GLOBALS['TL_LANG']['XPT']['unavailable'] = 'Serviço não disponível';
$GLOBALS['TL_LANG']['XPT']['maintenance'] = 'Este website não está actualmente disponível. Por favor volte mais tarde.';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['title'] = 'Incapaz de gerar o URL do front end';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['matter'] = 'O URL não pôde ser gerado, porque a rota tem parâmetros obrigatórios que não são dados. Devem ser fornecidas informações adicionais (p.e., um pseudónimo de notícia).';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['explain'] = 'As rotas Symfony podem ter parâmetros variáveis, que são validados usando expressões regulares. A seguinte configuração não pôde ser resolvida:';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['path'] = 'Percurso de rota';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterName'] = 'Nome';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterRequirement'] = 'Requisito (Regex)';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterDefault'] = 'Valor';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterEmpty'] = 'vazio';
