<?php

namespace WEBprofil\WpCbexample\Domain\Repository;

use WEBprofil\WpCbexample\Domain\Repository\Traits\StoragePageAgnosticTrait;
use TYPO3\CMS\Extbase\Persistence\Repository;

class VehicleRepository extends Repository
{
    use StoragePageAgnosticTrait;
}
