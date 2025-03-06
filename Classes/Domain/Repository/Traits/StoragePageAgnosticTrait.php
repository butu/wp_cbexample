<?php

declare(strict_types=1);

namespace WEBprofil\WpCbexample\Domain\Repository\Traits;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/**
 * This trait for repositories makes the repository ignore the storage page setting when fetching models.
 * @method setDefaultQuerySettings(mixed $querySettings)
 */
trait StoragePageAgnosticTrait
{
    public function initializeObject(): void
    {
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
