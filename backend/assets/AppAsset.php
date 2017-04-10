<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
//    public $css = [
//        'css/site.css',
//    ];
//    public $js = [
//    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'dee\adminlte\AdminlteAsset',
//    ];
    public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $sourcePath = '@bower/';
    public $css = [
        'admin-lte/dist/css/AdminLTE.css',
        'css/site.css',
    ];
    public $js =  ['admin-lte/dist/js/AdminLTE/app.js'];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'dee\adminlte\AdminlteAsset',
    ];
}
