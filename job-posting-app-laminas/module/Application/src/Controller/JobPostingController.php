<?php 

// module/Application/src/Controller/JobPostingController.php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\Form\Form;
use Application\Model\Job;
use Application\Model\JobTable;
use Application\Form\JobForm;

class JobPostingController extends AbstractActionController
{
    private $jobTable;
    private $jobForm;

    public function __construct(JobTable $jobTable, JobForm $jobForm)
    {
        $this->jobTable = $jobTable;
        $this->jobForm = $jobForm;
    }

    public function indexAction()
    {
        $viewModel = new ViewModel(['form' => $this->jobForm]);

        if ($this->getRequest()->isPost()) {
            $job = new Job();
            $this->jobForm->bind($job);
            $this->jobForm->setData($this->getRequest()->getPost());

            if ($this->jobForm->isValid()) {
                $this->jobTable->saveJob($job);
                // Redirect to job listing or show success message
                return $this->redirect()->toRoute('job_listing');
            }
        }

        return $viewModel;
    }
}