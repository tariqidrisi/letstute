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

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/admin/ad_app.js', 'public/js/admin')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/admin/ad_app.scss', 'public/css/admin')
   .options({
      processCssUrls: false
   })
   .copyDirectory('resources/img', 'public/img')
   .copyDirectory('resources/img/admin', 'public/img');
   
   if (mix.inProduction()) {

        mix.version().disableNotifications();

    } else {

        mix.sourceMaps();

    }
