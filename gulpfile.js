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
	mix.sass('app.scss')
		.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/')
		.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/')
        .browserify(['app.js','bundle.js'])
        .browserSync({
            proxy: 'flukky.dev'
        })
        .version(['css/app.css','js/app.js'])

});