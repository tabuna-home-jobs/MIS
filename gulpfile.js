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

    mix.styles([
        "./resources/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css",
        "./public/zdorovie48/css/orchid.css"
    ], 'public/zdorovie48/css/orchid.css', './');

    /*
    mix.copy('./resources/assets/zdorovie48/vendor/bootstrap/dist/fonts/', './public/zdorovie48/fonts');
    mix.copy('./resources/assets/zdorovie48/vendor/font-awesome/fonts/', './public/zdorovie48/fonts');
    mix.copy('./resources/assets/fonts/', './public/zdorovie48/fonts');
    mix.copy('./resources/assets/zdorovie48/vendor/fancybox/source/', './public/zdorovie48/fancybox');
    */

    mix.scripts([
        "../vendor/jquery/dist/jquery.min.js",
        "../vendor/bootstrap/dist/js/bootstrap.min.js",
        "../vendor/jasny-bootstrap/dist/js/jasny-bootstrap.min.js",
        "../vendor/jquery-ui/jquery-ui.min.js",
        '../vendor/fancybox/source/jquery.fancybox.js',
        '../vendor/sweetalert/dist/sweetalert.min.js',
        '../vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
        '../vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        '../vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.ru.min.js',
        "zdorovie48/app.js",
        "zdorovie48/components/**"
    ], './public/zdorovie48/js/orchid.js');
});