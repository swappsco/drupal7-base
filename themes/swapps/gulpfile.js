'use strict'

var gulp = require('gulp')
var browserSync = require('browser-sync').create()
var _ = require('gulp-load-plugins')({lazy: false})
var cleanCSS = require('gulp-clean-css');
var exec = require('child_process').exec
var uncss = require('gulp-uncss');
var notify = require("gulp-notify");

var path = {
  sass: 'assets/styles/',
  js: 'assets/scripts/',
  dist: 'dist',
  vendor: 'bower_components',
}

gulp.task('sass', function() {
  gulp.src(`${path.sass}/main.scss`)
    .pipe(_.sourcemaps.init())
    .pipe(_.plumber({errorHandler: HandlersError}))
    .pipe(_.sass({outputStyle: 'compressed'}))
    .pipe(_.sourcemaps.write("./"))
    .pipe(gulp.dest(`${path.dist}/css`))
    .pipe(_.notify('Finish task'))
    .pipe(browserSync.stream())
})

gulp.task('js', function() {
  gulp.src([
    `${path.js}${'/scripts.js'}`,
    `${path.vendor}/bootstrap/dist/js/bootstrap.js`,
    ])
    .pipe(_.plumber({errorHandler: HandlersError}))
    .pipe(_.concat('main.js'))
    .pipe(gulp.dest(`${path.dist}/js`))
    .pipe(_.notify('Finish task'))
})

gulp.task('watch', function() {
  gulp.watch(path.js + '/**/*.js', ['js'])
  gulp.watch(path.sass + '/**/*.scss', ['sass'])
})

function HandlersError (e) {
  _.notify.onError({title: 'Task error', message: "Check your terminal", sound: "Sosumi"})(e)
  console.log(e.message)
  this.emit('end')
}
