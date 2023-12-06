<?php

/**
 * List of enabled modules for this application.
 *
 * This should be an array of module namespaces used in the application.
 */

return [
    'Laminas\Form',
    'Laminas\Hydrator',
    'Laminas\InputFilter',
    'Laminas\Filter',
    'Laminas\Db',
    'controllers' => [
        'factories' => [
           Application\Controller\JobPostingController::class => Application\Controller\Factory\JobPostingControllerFactory::class,
           Application\Controller\JobListingController::class => Application\Controller\Factory\JobListingControllerFactory::class
        ],
    ],
    'router' => [
        'routes' => [
            'job_listing' => [
                'type' => 'literal',
                'options' => [
                    'route'    => '/job-listing',
                    'defaults' => [
                        'controller' => Application\Controller\JobListingController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'job_posting' => [
                'type' => 'literal',
                'options' => [
                    'route'    => '/job-posting',
                    'defaults' => [
                        'controller' => Application\Controller\JobPostingController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'Laminas\Router',
    'Laminas\Validator',
    'Application',
];
