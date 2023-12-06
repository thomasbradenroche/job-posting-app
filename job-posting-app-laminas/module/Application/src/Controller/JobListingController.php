<?php 

// module/Application/src/Controller/JobListingController.php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Model\JobTable;

class JobListingController extends AbstractActionController
{
    private $jobTable;

    public function __construct(JobTable $jobTable)
    {
        $this->jobTable = $jobTable;
    }

    public function indexAction()
    {
        $jobs = $this->jobTable->fetchAll();
        return new ViewModel(['jobs' => $jobs]);
    }
}