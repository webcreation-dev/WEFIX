const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

    mix.js('resources/js/app.js', 'public/js')
        .postCss('resources/css/app.css', 'public/css', [
            //
        ]);

    // Inclure les fichiers CSS situés dans le dossier "public/css"
    mix.styles([
        'public/css/dossier1/*.css',
        'public/css/dossier2/**/*.css',
        'public/css/dossier3/*.css'
    ], 'public/css/all.css');

    // Inclure les fichiers JavaScript situés dans le dossier "public/js"
    mix.scripts([
        'public/js/dossier1/*.js',
        'public/js/dossier2/**/*.js',
        'public/js/dossier3/*.js'
    ], 'public/js/all.js');

    if (mix.inProduction()) {
        mix.version();
    }
