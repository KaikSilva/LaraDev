const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the scss
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .styles([
        'resources/views/front/assets/css/bootstrap.min.css',
        'resources/views/front/assets/css/animate.min.css',
        'resources/views/front/assets/css/magnific-popup.min.css',
        'resources/views/front/assets/css/gordita-font.css',
    ] , 'public/front/assets/css/vendor.css')
    .styles([
        'resources/views/front/assets/css/style.css',
    ] , 'public/front/assets/css/style.css')
    .styles([
        'resources/views/front/assets/css/icofont.min.css',
    ] , 'public/front/assets/css/icofont.css')

    .scripts([
        'resources/views/front/assets/js/bootstrap.bundle.min.js',
        'resources/views/front/assets/js/jquery-3.6.0.min.js',
        'resources/views/front/assets/js/jquery-migrate-3.3.2.min.js',
        'resources/views/front/assets/js/modernizr-3.11.2.min.js',
        'resources/views/front/assets/js/wow.min.js',
        'resources/views/front/assets/js/swiper-bundle.min.js',
        'resources/views/front/assets/js/parallax.min.js',
        'resources/views/front/assets/js/jquery.magnific-popup.min.js',
        'resources/views/front/assets/js/tippy.min.js',
        'resources/views/front/assets/js/mailchimp-ajax.js',
        'resources/views/front/assets/js/one-page-nav.min.js',
    ] , 'public/front/assets/js/vendor.js')
    .scripts([
        'resources/views/front/assets/js/main.js',
    ] , 'public/front/assets/js/main.js')
    .copyDirectory('resources/views/front/assets/images' , 'public/front/assets/images')
    .copyDirectory('resources/views/front/assets/fonts' , 'public/front/assets/fonts');

