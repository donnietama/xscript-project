let mix = require('laravel-mix')

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/welcome.scss', 'public/css')
    .sass('resources/assets/sass/app.scss', 'public/css')
    
    /**
     * Custom CSS.
     */
    .sass('resources/assets/sass/admin-style.scss', 'public/css')

    /**
     * Material Dashboard Templating.
     * --------------------------------------------------
     */
    // Styles
    .sass('resources/assets/sass/material-dashboard.scss', 'public/css')
    
    // Core JS Files
    .js('resources/assets/js/material-dashboard/core/jquery.min.js', 'public/js')
    .js('resources/assets/js/material-dashboard/core/popper.min.js', 'public/js')
    .js('resources/assets/js/material-dashboard/core/bootstrap-material-design.min.js', 'public/js')

    // Plugins
    .js('resources/assets/js/material-dashboard/plugins/bootstrap-notify.js', 'public/js')
    .js('resources/assets/js/material-dashboard/material-dashboard.min.js', 'public/js')

    // Plugins -> codesample -> prism
    .js('resources/assets/js/prism.js', 'public/js')
    .styles('resources/assets/css/prism.css', 'public/css/prism.css')
    
/**
 * Copy TinyMCE skins ke folder:
 * path: public/js/skins.
 */
mix.copy('node_modules/tinymce/skins', 'public/js/skins')
   .copy('node_modules/tinymce/plugins/codesample/css/prism.css', 'public/js/plugins/codesample/css')
