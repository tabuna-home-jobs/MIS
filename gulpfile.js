var elixir = require('laravel-elixir');
var gulp = require('gulp');

/*
 |--------------------
 | Elixir Asset Management
 |

 --------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('zdorovie48/app.less', './public/zdorovie48/css/orchid.css');

    /*
    mix.copy('./resources/assets/zdorovie48/vendor/bootstrap/dist/fonts/', './public/zdorovie48/fonts');
    mix.copy('./resources/assets/zdorovie48/vendor/font-awesome/fonts/', './public/zdorovie48/fonts');
    mix.copy('./resources/assets/fonts/', './public/zdorovie48/fonts');
    mix.copy('./resources/assets/zdorovie48/vendor/fancybox/source/', './public/zdorovie48/fancybox');
    */

    /*
    mix.scripts([
        "./resources/assets/zdorovie48/vendor/jquery/dist/jquery.min.js",
        "./resources/assets/zdorovie48/vendor/bootstrap/dist/js/bootstrap.min.js",
        "./resources/assets/zdorovie48/vendor/jasny-bootstrap/dist/js/jasny-bootstrap.min.js",
        "./resources/assets/zdorovie48/vendor/jquery-ui/jquery-ui.min.js",
        "./resources/assets/zdorovie48/js/app.js",
        "./resources/assets/zdorovie48/js/components/**",
        './resources/assets/zdorovie48/vendor/fancybox/source/jquery.fancybox.js',
        '/resources./assets/zdorovie48/vendor/sweetalert/dist/sweetalert.min.js'
    ], './public/zdorovie48/js/orchid.js');
    */
});