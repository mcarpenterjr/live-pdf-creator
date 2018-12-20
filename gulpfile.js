var gulp = require('gulp'),
zip = require('gulp-zip'),
date = require('dateformat'),
rev = require('gulp-rev-append'),
clean = require('gulp-clean'),
replace = require('gulp-html-replace'),
chalk = require('chalk');

gulp.task('user-preview', ['clean-preview'], function() {
  console.log(chalk.red.bold('Creating Preview Directory'));
  gulp.src('./_src/**/*')
  .pipe(rev())
  .pipe(gulp.dest('./_preview'));
});

gulp.task('backup', function() {
  console.log(chalk.red.bold('Creating Backups'));
  var ts = new Date(),
  fn = date(ts, 'mm-dd-yyyy-HHMM');
  gulp.src('/smt/linux3/workflow/*.*')
  .pipe(zip(fn +'.zip'))
  .pipe(gulp.dest('./backups'))
  .pipe(gulp.dest('/smt/linux3/workflow/backups'));
});

gulp.task('clean-preview', function() {
  console.log(chalk.red.bold('Emptying Preview Directry'));
  return gulp.src('./_preview/**/*', {read: false})
  .pipe(clean());
});

gulp.task('deploy', ['backup'], function() {
  console.log(chalk.red.bold('Deploying Application'));
  gulp.src('./_src/**/*.*')
  .pipe(rev())
  .pipe(gulp.dest('/smt/linux3/workflow'));
});
