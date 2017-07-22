var gulp = require('gulp');
var less = require('gulp-less');
var wpPot = require('gulp-wp-pot');
var concat = require('gulp-concat');
var webpack = require('gulp-webpack');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

var dirs = {
    css: 'assets/css',
    js: 'assets/js',
    less: 'assets/less'
};

gulp.task('less', function() {
    return gulp.src([
            dirs.less+'/style.less',
            dirs.less+'/framework.less'
        ])
        .pipe(less())
        .pipe(concat('style.css'))
        .pipe(gulp.dest(dirs.css))
});

gulp.task('makepot', function () {
    return gulp.src('**/*.php')
        .pipe(wpPot({
            domain: 'managx',
            package: 'ManagX'
        }))
        .pipe(gulp.dest('i18n/languages/managx.pot'));
});

gulp.task('webpack', function() {
    return gulp.src(dirs.js+'/main.js')
        .pipe(webpack(require('./webpack.config.js')))
        .pipe(gulp.dest(dirs.js));
});

gulp.task('uglify', function () {
    return gulp.src(dirs.js+'/managx.js')
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(dirs.js))
});

gulp.task('watch', function () {
    gulp.watch(dirs.less+'/**', ['less']);

    gulp.watch(dirs.js+'/components/**', ['webpack']);

    gulp.watch(dirs.js+'/main.js', ['webpack']);
});

gulp.task('default', ['less', 'webpack']);
gulp.task('release', ['less', 'makepot', 'webpack', 'uglify']);
gulp.task('zip', ['clean', 'copy', 'compress']);
