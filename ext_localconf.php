<?php

declare(strict_types=1);

use WEBprofil\WpCbexample\Controller\LogController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'WpCbexample',
    'Logs', // unique
    [LogController::class => 'list,new,create,edit,update,delete'], // all actions
    [LogController::class => 'list,new,create,edit,update,delete'], // cached actions
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);