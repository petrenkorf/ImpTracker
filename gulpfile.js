//var elixir  = require('laravel-elixir');
var gulp    = require('gulp');
var phpunit = require('gulp-phpunit');
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

gulp.task('phpunit', function() {
  gulp.src('')
    .pipe(phpunit());
});

gulp.task('watch', function () {
    gulp.watch(['tests/**/*.php', 'app/**/*.php'], ['phpunit']);
});