<?php
$config = [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => '\yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=yii2_demo',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8',
        ],
    ],
];
$config['modules']['gii'] = [
    'class' => 'yii\gii\Module',
    'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*'],
];
return $config;
