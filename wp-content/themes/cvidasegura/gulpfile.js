const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const terser = require('gulp-terser');
const sass = require('gulp-sass')(require('sass'));


// Tarefa para compilar o Sass e minificar o CSS
gulp.task('style', function() {
    return gulp.src('src/sass/**/*.scss') // Caminho dos arquivos Sass
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS())
        .pipe(gulp.dest('dist/library/css')); // Pasta de destino dos arquivos minificados
});

// Tarefa para minificar JavaScript
gulp.task('scripts', function() {
    return gulp.src('src/js/**/*.js') // Caminho dos arquivos JavaScript
        .pipe(terser())
        .pipe(gulp.dest('dist/library/js')); // Pasta de destino dos arquivos minificados
});

// Watch task
gulp.task('watch', function() {
    gulp.watch('src/sass/**/*.scss', gulp.series('style')); // Watch Sass files
    gulp.watch('src/js/**/*.js', gulp.series('scripts')); // Watch JavaScript files
});


// Tarefa padrão para rodar as tarefas styles, scripts e watch
gulp.task('default', gulp.parallel('style', 'scripts', 'watch'));

