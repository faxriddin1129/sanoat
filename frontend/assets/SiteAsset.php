<?php

namespace frontend\assets;

use yii\web\AssetBundle;


class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/assets/vendor/aos/aos.css',
        'template/assets/vendor/bootstrap/css/bootstrap.min.css',
        'template/assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'template/assets/vendor/boxicons/css/boxicons.min.css',
        'template/assets/vendor/glightbox/css/glightbox.min.css',
        'template/assets/vendor/remixicon/remixicon.css',
        'template/assets/vendor/swiper/swiper-bundle.min.css',
        'template/assets/css/style.css',

        ];
    public $js = [
        'template/assets/vendor/aos/aos.js',
        'template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'template/assets/vendor/glightbox/js/glightbox.min.js',
        'template/assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'template/assets/vendor/php-email-form/validate.js',
        'template/assets/vendor/purecounter/purecounter.js',
        'template/assets/vendor/swiper/swiper-bundle.min.js',
        'template/assets/js/main.js',
        ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
