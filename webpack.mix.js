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

 mix
 .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/administrativo/bootstrap.css')
 
 .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/administrativo/bootstrap.js')

 .scripts('node_modules/jquery/dist/jquery.js', 'public/administrativo/jquery.js')