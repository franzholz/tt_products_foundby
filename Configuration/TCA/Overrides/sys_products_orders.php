<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function () {

    $table = 'sys_products_orders';
    $languageFile = 'LLL:EXT:tt_products_foundby/Resources/Private/Language/locallang.xlf';

    if (isset($GLOBALS['TCA'][$table]['columns']['foundby']['config'])) {
        $GLOBALS['TCA'][$table]['columns']['foundby']['config']['items'] = [
            [$languageFile . ':sys_products_orders.foundby.I.0', '0'],
            [$languageFile . ':sys_products_orders.foundby.I.1', '1'],
            [$languageFile . ':sys_products_orders.foundby.I.2', '2'],
            [$languageFile . ':sys_products_orders.foundby.I.3', '3'],
            [$languageFile . ':sys_products_orders.foundby.I.4', '4'],
            [$languageFile . ':sys_products_orders.foundby.I.5', '5'],
            [$languageFile . ':sys_products_orders.foundby.I.6', '6']
        ];
    }
});
