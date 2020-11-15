<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$secret = require __DIR__ . '/secret.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'Project Term',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'vocabulary-dkfo243',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [ // Yii::$app->user
            'class' => 'yii\web\User',
            'identityClass' => 'app\models\SystemUser',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info', 'trace'],
                    'logVars' => [],
                    'maxLogFiles' => 50,
                    'except' => ['yii\db\*'],
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info', 'trace'],
                    'logVars' => [],
                    'maxLogFiles' => 50,
                    'categories' => ['yii\db\*'],
                    'logFile' => '@app/runtime/logs/sql.log',
                ],
            ],
        ],
        // 'log' => [
        //     'targets' => [
        //         [
        //             'class' => 'yii\log\FileTarget',
        //             'levels' => ['error', 'warning', 'info', 'trace'],
        //             'logVars' => [],
        //             'except' => ['yii\db\*'],
        //         ],
        //         [
        //             'class' => 'yii\log\FileTarget',
        //             'levels' => ['error', 'warning', 'info', 'trace'],
        //             'logVars' => [],
        //             'categories' => ['yii\db\*'],
        //             'logFile' => '@app/runtime/logs/sql.log',
        //         ],
        //     ],
        // ],
        'db' => $db,
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'authClientCollection' => $secret['authClientCollection'],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
