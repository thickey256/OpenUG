<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
        ],
        'factories' => [
            App\Action\PageAction::class => App\Action\PageActionFactory::class,
            App\Action\SpeakerAction::class => App\Action\SpeakerActionFactory::class,
            App\Action\EventAction::class => App\Action\EventActionFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'page',
            'path' => '/[{id}]',
            'middleware' => App\Action\PageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'speaker',
            'path' => '/speaker/{id}',
            'middleware' => App\Action\SpeakerAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'event',
            'path' => '/event/{id}',
            'middleware' => App\Action\EventAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
