<?php

declare(strict_types=1);

namespace WEBprofil\WpCbexample\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Vehicle extends AbstractEntity
{
    public string $carNumber;
}