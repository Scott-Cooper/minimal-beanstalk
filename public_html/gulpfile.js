var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var clean = require('gulp-clean-css');

gulp.task('js', function(){
	return gulp.src('js/src/*.js')
		.pipe(concat('scripts.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('js/'));
});

gulp.task('sass', function(){
  return gulp.src('css/src/*.scss')
	.pipe(concat('style.min.css'))
    .pipe(sass()) // Using gulp-sass
	.pipe(clean())
    .pipe(gulp.dest('css/'))
});

gulp.task('watch', function() {
    gulp.watch('js/src/*.js', {debounceDelay: 2000}, ['js']);
    gulp.watch('css/src/*.scss', ['sass']); 
});

gulp.task('default', ['watch']);