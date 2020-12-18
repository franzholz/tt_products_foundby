<?php

namespace JambageCom\TtProductsFoundby\Hooks;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


/**
 * hook for addition to the _LOCAL_LANG setup of tt_products
 *
 * @author  Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage tt_products_foundby
 *
 */

class LanguageAdder {

    public function init (
        \JambageCom\Div2007\Base\TranslationBase &$languageObj,
        array $tableClassArray
    )
    {
        $key = 'sys_products_orders.foundby.I.1';
        $word = $languageObj->getLocalLang()[$languageObj->getLocalLangKey()][$key][0]['target'];
        $langKey = $languageObj->getLocalLangKey();
        $filePrefix = '';
        $filePath = 
            'EXT:tt_products_foundby/Resources/Private/Language/';
        $filename = 'locallang.xlf';
        if (strlen($langKey) == 2) {
            $filePrefix = $langKey . '.';
            $fileReference = $filePath . $filePrefix . $filename;
            $absFileName = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($fileReference);

            if (!file_exists($absFileName)) {
                 $filePrefix = '';
            }
        }
        $languageObj->loadLocalLang($filePath . $filePrefix . $filename,
            true
        );
        $word = $languageObj->getLocalLang()[$languageObj->getLocalLangKey()][$key][0]['target'];
    }
}

