<?php

declare(strict_types=1);

namespace WEBprofil\WpCbexample\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class CostCenter extends AbstractEntity
{
    public string $title;
    public int $id;
}