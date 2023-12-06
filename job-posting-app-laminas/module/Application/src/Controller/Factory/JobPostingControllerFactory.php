<?php
// module/Application/src/Controller/Factory/JobPostingControllerFactory.php

namespace Application\Controller\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Application\Controller\JobPostingController;
use Application\Model\JobTable;
use Application\Form\JobForm;

class JobPostingControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $jobTable = $container->get(JobTable::class);
        $jobForm = $container->get(JobForm::class);
        return new JobPostingController($jobTable, $jobForm);
    }
}