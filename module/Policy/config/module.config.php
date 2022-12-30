<?php
namespace Policy;

use Policy\Controller\PolicyController;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return[
    'router' => [
        'routes' => [
            'policy' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/policy[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => PolicyController::class,
                        'action' => 'index',
                    ]
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ]
];

?>