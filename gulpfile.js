var elixir = require('laravel-elixir');

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

elixir(mix => {
    
    mix.scripts([
        'app.js'
    ], 'public/js/app.min.js');

    mix.scripts([
        'controller/userController.js'
    ], 'public/js/controller/controller.min.js');
});
