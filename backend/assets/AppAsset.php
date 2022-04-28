<?php

namespace backend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'template/css/sb-admin-2.min.css',
        'template/vendor/fontawesome-free/css/all.min.css',
    ];
    public $js = [
    "template/vendor/jquery/jquery.min.js",
    "template/vendor/bootstrap/js/bootstrap.bundle.min.js",
    "template/vendor/jquery-easing/jquery.easing.min.js",
    "template/js/sb-admin-2.min.js",
    "template/vendor/chart.js/Chart.min.js",
    "template/js/demo/chart-area-demo.js",
    "template/js/demo/chart-pie-demo.js",

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
