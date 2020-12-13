
const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

//compile scss into css
function style() {
    return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
      notify: false,
      proxy: 'http://gym-champs.local/',
      ghostMode: false
    });
    gulp.watch('./scss/**/*.scss', style)
    gulp.watch('./**/*.php').on('change',browserSync.reload);
}

exports.style = style;
exports.watch = watch;

//