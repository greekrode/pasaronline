const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //app.scss includes app css, Boostrap and Ionicons
    mix.sass('app.scss')
        .less('./node_modules/admin-lte/build/less/AdminLTE.less', './public/css/adminlte-less.css')
        .less('adminlte-app.less')
        .less('./node_modules/toastr/toastr.less')
        .styles([
            './public/css/app.css',
            './node_modules/admin-lte/dist/css/skins/_all-skins.css',
            './public/css/adminlte-less.css',
            './public/css/adminlte-app.css',
            './node_modules/icheck/skins/square/blue.css',
            './public/css/toastr.css',
            './public/css/font-awesome.css',
            './public/plugins/datepicker/datepicker3.css',
            './public/plugins/daterangepicker/daterangepicker.css',
            './public/css/skins/_all-skins.css',
            './public/css/ionicons.css',
        ])
        .copy('node_modules/font-awesome/fonts/*.*','public/fonts/')
        .copy('node_modules/ionicons/dist/fonts/*.*','public/fonts/')
        .copy('node_modules/admin-lte/bootstrap/fonts/*.*','public/fonts/bootstrap')
        .copy('node_modules/admin-lte/dist/css/skins/*.*','public/css/skins')
        .copy('node_modules/admin-lte/dist/img','public/img')
        .copy('node_modules/admin-lte/plugins','public/plugins')
        .copy('node_modules/icheck/skins/square/blue.png','public/css')
        .copy('node_modules/icheck/skins/square/blue@2x.png','public/css')
        .scripts([
            './public/plugins/jQuery/jquery-2.2.3.min.js',
            './public/js/bootstrap.js',
            './public/js/jquery-ui.js',
            './public/plugins/sparkline/jquery.sparkline.min.js',
            './public/plugins/morris/morris.min.js',
            './public/js/raphael.js',
            './public/plugins/sparkline/jquery.sparkline.min.js',
            './public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
            './public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
            './public/plugins/knob/jquery.knob.js',
            './node_modules/chart.js/dist/chart.js',
            './public/js/moment.js',
            './public/plugins/slimScroll/jquery.slimscroll.min.js',
            './public/plugins/fastclick/fastclick.js',
            './public/plugins/daterangepicker/daterangepicker.js',
            './public/plugins/datepicker/bootstrap-datepicker.js',
            ])
        .webpack('app.js')
});
