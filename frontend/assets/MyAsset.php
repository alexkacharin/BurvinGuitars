<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/vendor';
    public $css = [

        'bootstrap-icons/bootstrap-icons.css',
        'boxicons/css/boxicons.min.css',
        'glightbox/css/glightbox.min.css',
        'swiper/swiper-bundle.min.css',
    ];

    public $js = [
        'purecounter/purecounter_vanilla.js',
        'aos/aos.js',
        'bootstrap/js/bootstrap.bundle.min.js',
        'glightbox/js/glightbox.min.js',
        'isotope-layout/isotope.pkgd.min.js',
        'swiper/swiper-bundle.min.js',
        'php-email-form/validate.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}


