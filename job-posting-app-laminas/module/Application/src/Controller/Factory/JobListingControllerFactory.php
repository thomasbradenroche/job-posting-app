<?php

// module/Application/src/Controller/Factory/JobListingControllerFactory.php

namespace Application\Controller\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Application\Controller\JobListingController;
use Application\Model\JobTable;

class JobListingControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $jobTable = $container->get(JobTable::class);
        return new JobListingController($jobTable);
    }
}