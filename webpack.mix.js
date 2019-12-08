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

mix.js([
      'resources/assets/js/bootstrap.js',
      'resources/assets/js/creditly.js',
      'resources/assets/js/easing.js',
      'resources/assets/js/easyResponsiveTabs.js',
      'resources/assets/js/imagezoom.js',
      'resources/assets/js/jquery.flexisel.js',
      'resources/assets/js/jquery.flexslider.js',
      'resources/assets/js/jquery.magnific-popup.js',
      'resources/assets/js/jquery-2.1.4.min.js',
      'resources/assets/js/jquery-ui.js',
      'resources/assets/js/minicart.js',
      'resources/assets/js/move-top.js',
      'resources/assets/js/SmoothScroll.min.js',
   ], 'public/js/all.js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
      'public/css/vendor/bootstrap.css',
      'public/css/vendor/creditly.css',
      'public/css/vendor/easy-responsive-tabs.css',
      'public/css/vendor/flexslider.css',
      'public/css/vendor/font-awesome.css',
      'public/css/vendor/jquery-ui1.css',
      'public/css/vendor/popuo-box.css',
      'public/css/vendor/style.css',
   ], 'public/css/all.css');
   