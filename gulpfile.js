var gulp = require('gulp'),
  zip = require('gulp-zip'),
  date = require('dateformat'),
  rev = require('gulp-rev-append'),
  clean = require('gulp-clean'),
  replace = require('gulp-html-replace'),
  chalk = require('chalk'),
  exec = require('child_process').exec;

gulp.task('user-preview', ['clean-preview'], function() {
  console.log(chalk.red.bold('Creating Preview Directory'));
  gulp.src('./_src/**/*')
  .pipe(rev())
  .pipe(gulp.dest('./_preview'));
});

gulp.task('get-libs', function() {
  console.log(chalk.red.bold('Cloning Library Deps'));
  gulp.src('./libs/')
    .pipe(
      exec('git clone https://github.com/tecnickcom/TCPDF.git libs', function (err, stdout, stderr) {
        console.log(stdout);
        console.log(stderr);
        cb(err);
      })
    );
});
