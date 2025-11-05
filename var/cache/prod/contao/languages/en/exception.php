<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/en/exception.xlf
$GLOBALS['TL_LANG']['XPT']['error'] = 'An error occurred';
$GLOBALS['TL_LANG']['XPT']['matter'] = 'What\'s the matter?';
$GLOBALS['TL_LANG']['XPT']['howToFix'] = 'How can I fix the issue?';
$GLOBALS['TL_LANG']['XPT']['more'] = 'Tell me more, please';
$GLOBALS['TL_LANG']['XPT']['hint'] = 'To customize this notice, create a custom Twig template overriding <em>%s</em>.';
$GLOBALS['TL_LANG']['XPT']['errorOccurred'] = 'An error occurred while executing this script. Something does not work properly.';
$GLOBALS['TL_LANG']['XPT']['errorFixOne'] = 'Open the current log file in the <code>var/logs</code> directory and find the associated error message (usually the last one).';
$GLOBALS['TL_LANG']['XPT']['errorExplain'] = 'The script execution stopped, because something does not work properly. The actual error message is hidden by this notice for security reasons and can be found in the current log file (see above). If you do not understand the error message or do not know how to fix the problem, visit the <a href="%s" target="_blank" rel="noreferrer noopener">Contao support page</a>.';
$GLOBALS['TL_LANG']['XPT']['requestToken'] = 'Invalid request token';
$GLOBALS['TL_LANG']['XPT']['invalidToken'] = 'The request token could not be verified.';
$GLOBALS['TL_LANG']['XPT']['tokenRetry'] = 'Please <a href="javascript:window.location.href=window.location.href">click here</a> and try again. Do not use the back button of your browser.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainOne'] = 'This error occurs if there is a POST request without a valid authentication token. In Contao 2.10, the referer check has been replaced with a request token system. If the problem persists, you may be using an incompatible third-party extension or have not correctly updated your Contao installation.';
$GLOBALS['TL_LANG']['XPT']['tokenExplainTwo'] = 'For more information, visit the <a href="%s" target="_blank" rel="noreferrer noopener">Contao support page</a>.';
$GLOBALS['TL_LANG']['XPT']['unavailable'] = 'Service unavailable';
$GLOBALS['TL_LANG']['XPT']['maintenance'] = 'The website is currently not available. Please come back later.';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['title'] = 'Unable to generate front end URL';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['matter'] = 'The URL could not be generated, because the route has mandatory parameters that are not given. Additional information (e.g. a news alias) must be provided.';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['explain'] = 'Symfony routes can have variable parameters, which are validated using regular expressions. The following configuration could not be resolved:';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['path'] = 'Route path';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterName'] = 'Name';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterRequirement'] = 'Requirement (Regex)';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterDefault'] = 'Default value';
$GLOBALS['TL_LANG']['XPT']['missingRouteParameters']['parameterEmpty'] = 'empty';
