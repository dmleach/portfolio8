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
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/career/standard.scss', 'public/css/career')
    .sass('resources/sass/career/narrow.scss', 'public/css/career')
    .sass('resources/sass/page-footer.scss', 'public/css')
    .sass('resources/sass/page-header.scss', 'public/css')
    .sass('resources/sass/projects/standard.scss', 'public/css/projects')
    .sass('resources/sass/projects/narrow.scss', 'public/css/projects')
    .sass('resources/sass/project-details/standard.scss', 'public/css/project-details')
    .sass('resources/sass/project-details/narrow.scss', 'public/css/project-details')
;
