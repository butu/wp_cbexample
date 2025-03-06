<?php

declare(strict_types=1);

namespace WEBprofil\WpCbexample\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class LogEntry extends AbstractEntity
{
    public Vehicle $vehicle;
    public CostCenter $costCenter;
    public string $user;
    public \DateTime $date;
    public \DateTime $departureTime;
    public \DateTime $arrivalTime;
    public int $departureMileage;
    public int $arrivalMileage;
    public string $departureLocation;
    /** @var ObjectStorage<Location>*/
    public ObjectStorage $locations;
    public string $arrivalLocation;
    public int $purpose;
}