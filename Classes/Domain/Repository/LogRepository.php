<?php

declare(strict_types=1);

namespace WEBprofil\WpCbexample\Domain\Repository;

use WEBprofil\WpCbexample\Domain\Repository\Traits\StoragePageAgnosticTrait;
use TYPO3\CMS\Extbase\Persistence\Repository;

class LogRepository extends Repository
{
    use StoragePageAgnosticTrait;
}
