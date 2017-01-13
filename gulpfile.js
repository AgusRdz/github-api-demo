// const elixir = require('laravel-elixir');

// require('laravel-elixir-vue-2');


//  |--------------------------------------------------------------------------
//  | Elixir Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Elixir provides a clean, fluent API for defining some basic Gulp tasks
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for your application as well as publishing vendor resources.
//  |
 

// elixir((mix) => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

/* File: gulpfile.js */

// grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util');

// create a default task and just log a message
gulp.task('default', function() {
  return gutil.log('Gulp is running!')
});