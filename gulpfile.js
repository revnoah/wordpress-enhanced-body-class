/*
  This is a gulp workflow based around a sass file called app.scss
  It compiles and then watches for changes in themes using the folder
  structure shown below. The source and destination are set to the
  specific theme name.

  To make it work, you make to install:

  $ npm install
  
  To install the gulp requirements individually:

  $ npm install gulp gulp-zip gulp-notify

  To execute, change to project root:

  $ gulp
*/

var gulp = require('gulp');
var zip = require('gulp-zip');
var notify = require('gulp-notify');

var sourcePath = 'source';
var buildPath = 'build';
var fileName = 'enhanced-body-class';

gulp.task('zippy', function() {
  gulp.src(sourcePath + '/*')
    .pipe(zip(fileName + '.zip'))
    .pipe(gulp.dest(buildPath))
    .pipe(notify({ title: "Gulp!", message: "WordPress plugin zipped" }));
});

gulp.task('default', gulp.series('zippy'));
