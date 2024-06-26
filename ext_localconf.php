<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addPageTSConfig("@import 'EXT:wbh/Configuration/TsConfig/Design.tsconfig'");   