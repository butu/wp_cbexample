<?php

declare(strict_types=1);

namespace WEBprofil\WpCbexample\Controller;

use WEBprofil\WpCbexample\Domain\Repository\CostCenterRepository;
use WEBprofil\WpCbexample\Domain\Repository\LogEntryRepository;
use WEBprofil\WpCbexample\Domain\Repository\VehicleRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class LogController extends ActionController
{

    public function __construct(
        protected readonly VehicleRepository $vehicleRepository,
        protected readonly CostCenterRepository $costCenterRepository,
        protected readonly LogEntryRepository $logEntryRepository
    ) {
    }

    public function listAction(): ResponseInterface
    {
        $vehicles = $this->vehicleRepository->findAll();
        $costCenters = $this->costCenterRepository->findAll();
        $logEntries = $this->logEntryRepository->findAll();

        $this->view->assign('logEntries', $logEntries);
        $this->view->assign('vehicles', $vehicles);
        $this->view->assign('costCenters', $costCenters);

        return $this->htmlResponse();
    }
}
