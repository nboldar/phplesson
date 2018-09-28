<?php
return [
    'rootDir' => __DIR__ . "/../",
    'templatesDir' => __DIR__ . "/../views/",
    'defaultController' => 'product',
    'controllerNamespace' => "app\\controllers",
    'components' => [
        'db' => [
            'class' => \app\services\Db::class,
            'driver' => 'mysql',
            'host' => 'localhost',
            'login' => 'root',
            'password' => '',
            'database' => 'urok-5',
            'charset' => 'utf8'
        ],
        'request' => [
            'class' => \app\services\Request::class
        ],
        'templateRenderer' => [
            'class' => \app\services\TemplateRenderer::class
        ]
    ]
];