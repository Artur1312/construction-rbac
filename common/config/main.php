<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'en-EN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],



        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
    'modules' => [

        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin']
        ],
],
];
