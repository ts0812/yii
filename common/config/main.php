<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'zh-CN',

    'components' => [
        'request' => [
            'cookieValidationKey' => 'true',//  就是这里了
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
          //  'suffix' => '.html', // url 添加后缀名
            'rules' => [
                // ...
            ],
        ],
    ],
];
