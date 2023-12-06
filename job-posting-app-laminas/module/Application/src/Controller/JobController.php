<?php 

// JobController.php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Model\Job;

class JobController extends AbstractActionController
{
    protected $jobTable;

    public function indexAction()
    {
        $jobs = $this->getJobTable()->fetchAll();
        return new ViewModel(['jobs' => $jobs]);
    }

    public function postAction()
    {
        // Handle job posting form submission
        // Insert job data into the database

        return $this->redirect()->toRoute('jobs');
    }

    public function getJobTable()
    {
        if (!$this->jobTable) {
            $this->jobTable = $this->getServiceLocator()->get('Application\Model\JobTable');
        }
        return $this->jobTable;
    }
}