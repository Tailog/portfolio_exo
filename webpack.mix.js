const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts(
    [
        'resources/js/jquery.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/wow.js',
        'resources/js/mixitup.min.js',
        'resources/js/jquery.fancybox.min.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/custom.js',
        'resources/js/smoothscroll.js'
    ],
        'public/js/app.js'
    )
   .styles(
    [
        "resources/css/bootstrap.min.css",
        "resources/css/style.css",
        "resources/css/color.css",
        "resources/css/default-animation.css",
        "resources/css/jquery.fancybox.min.css",
        "resources/css/owl.carousel.min.css",
        "resources/css/responsive.css",
        "resources/css/font-awesome.min.css",
        "resources/fonts/flaticon/flaticon.css"
    ],
    "public/css/all.css"
);

mix.copyDirectory('vendor/potato/images', 'public/images');

mix.copyDirectory('vendor/potato/fonts','public/fonts');
