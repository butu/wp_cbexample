<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function (): void {
    ExtensionUtility::registerPlugin(
        'WpCbexample',
        'Logs', // unique
        'Fahrtenbuch', // title, visible in backend
        'content-plugin', // icon identifier
        'Fahrtenbuch', // in which tab to show this plugin
        'Fahrtenbuch-Verwaltung für Standard-User'
    );
})();