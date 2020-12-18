<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function () {
    if (TYPO3_MODE == 'FE') {
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_products']['init'][] = 
            \JambageCom\TtProductsFoundby\Hooks\LanguageAdder::class;
    }
});

