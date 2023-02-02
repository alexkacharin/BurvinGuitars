<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/bootstrap-icons/bootstrap-icons.css',
        'vendor/boxicons/css/boxicons.min.css',
        'vendor/glightbox/css/glightbox.min.css',
        'vendor/swiper/swiper-bundle.min.css',
        'vendor/aos/aos.css',
        'css/style.css'
    ];
    public $js = [

         'vendor/purecounter/purecounter_vanilla.js',
         'vendor/aos/aos.js',
         'vendor/bootstrap/js/bootstrap.bundle.min.js',
         'vendor/glightbox/js/glightbox.min.js',
         'vendor/isotope-layout/isotope.pkgd.min.js',
         'vendor/swiper/swiper-bundle.min.js',
         'vendor/php-email-form/validate.js',
         'js/main.js',
    ];

    public $depends = [

    ];
}