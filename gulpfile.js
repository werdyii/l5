var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |

https://laracasts.com/series/laravel-5-fundamentals/episodes/19
https://scotch.io/tutorials/run-gulp-tasks-in-laravel-easily-with-elixir
http://laravel.com/docs/master/elixir
gulp
gulp watch

gulp --production  vytvorim minifykovany produkcny file
 */

elixir.config.sourcemaps = false;

elixir(function(mix) {

    mix.less('app.less')
       .less('dashboard.less','public/css/dasboard.css');    

    mix.styles(['vendor/normalizer.css','app.css'],null,'public/css');

    mix.scriptsIn('resources/assets/js');

    mix.version('public/css/all.css');

});

