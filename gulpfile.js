var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

//here we define the list of things to happen when we run gulp styles
gulp.task('styles', function(){
	gulp.src('wp-content/themes/theme-hackeryou/style.scss')
	.pipe(sass({
		errLogToConsole: true
		}))
	.pipe(gulp.dest('wp-content/themes/theme-hackeryou/'))
	.pipe(reload({stream: true}))
});

gulp.task('watch',['browser-sync'], function(){
	console.log("testing 123");
	gulp.watch('wp-content/themes/theme-hackeryou/style.scss',['styles'])
	});

gulp.task('browser-sync', function() {
    browserSync({
        proxy: "localhost:7777"
    });
});
