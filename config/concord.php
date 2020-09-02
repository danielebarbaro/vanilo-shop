<?php

return [
    'modules' => [
        Konekt\Acl\Providers\ModuleServiceProvider::class => [
            'cache_expiration_time' => 60 * 24,
            'display_permission_in_exception' => false
        ],
        Konekt\AppShell\Providers\ModuleServiceProvider::class => [
            'event_listeners' => true,
            'breadcrumbs' => true,
            'components' => [
                'breadcrumbs' => [
                    'view' => 'appshell::widgets.breadcrumbs'
                ]
            ],
            'ui' => [
                'name' => 'Vanilo',
                'url' => '/admin/product'
            ]
        ],
        Vanilo\Framework\Providers\ModuleServiceProvider::class => [
            'currency' => [
                'code' => 'EUR',
                'sign' => '€',
                'format' => '%1$g%2$s'
            ]
        ],
    ],
    'register_route_models' => true
];
