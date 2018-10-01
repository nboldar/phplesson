<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 28.09.2018
 * Time: 20:54
 */
return [
    'rootDir' => __DIR__ . '/../',
    'templateDir' => __DIR__ . '/../views/',
    'defaultController' => 'product',
    'controllerNamespace' => 'app\\controllers',
    'ds' => DIRECTORY_SEPARATOR,
    'components' => [
        'db' => [
            'class' => \app\services\Db::class,
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'login' => 'root',
            'password' => '',
            'database' => 'lesson5',
            'charset' => 'utf8',
            'port' => '3307'
        ],
        'request' => [
            'class' => \app\services\Request::class
        ],

        'templateRenderer' => [
            'class' => \app\services\TemplateRenderer::class
        ],
        'session'=>[
            'class'=>\app\services\Session::class
        ],
        'auth'=>[
            'class'=>\app\services\Auth::class
        ]
    ]
];