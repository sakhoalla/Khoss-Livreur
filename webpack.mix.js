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

mix.js('resources/js/app.js','resources/vendor/jquery/jquery.min.js','resources/vendor/bootstrap/js/bootstrap.bundle.min.js','resources/vendor/jquery-easing/jquery.easing.min.js','resources/js/jqBootstrapValidation.js','resources/js/contact_me.js','resources/js/agency.min.js', 'public/js')
    .sass('resources/sass/app.scss','resources/vendor/bootstrap/css/bootstrap.min.css','resources/vendor/fontawesome-free/css/all.min.css', 'public/all.css')
    .styles(['resources/vendor/fontawesome-free/css/all.min.css','resources/vendor/bootstrap/css/bootstrap.min.css'], 'public/css/all.css');
 