var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
    .browserify('app.js')
    .scripts(['assets/jquery.min.js', 'assets/materialize.min.js'], 'public/js/assets.js')
    .styles(['materialize.min.css'])
    .version(['js/app.js', 'js/assets.js', 'css/all.css']);
});
