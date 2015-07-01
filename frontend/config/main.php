<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'view' => [
                'defaultExtension' => 'html',
                'renderers' => [
                    'twig' => [
                        'class' => 'yii\twig\ViewRenderer',
                        // set cachePath to false in order to disable template caching
                        'cachePath' => '@runtime/Twig/cache',
                        // Array of twig options:
                        'options' => [
                            'auto_reload' => true,
                            'autoescape' => false,
                        ],
                         'globals' => [
                            'html' => '\yii\helpers\Html',
                            'url' => '\yii\helpers\Url',
                            'pages' => '\backend\models\Pages',
                            'appAsset' => '\frontend\assets\AppAsset',
                        ],
                        'uses' => ['yii\bootstrap'],
                    ],
                ],
        ],
        'urlManager' => [
                'class' => 'yii\web\UrlManager',
                'enablePrettyUrl' => true,
                'showScriptName' => false,
                'rules' => [
                    '<controller:\w+>/<id:\d+>' => '<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                    'module/<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                ],
            ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
