<?php

declare(strict_types=1);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess']['my_extension'] = \Prefix\MyExtension\PageRendererHooks::class . '->renderPreProcess';
