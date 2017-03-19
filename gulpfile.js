// Объявляем наши плагины
var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var watch = require('gulp-watch');
var prefixer = require('gulp-autoprefixer');
var csscomb = require('gulp-csscomb');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
// Создаем sass задание
// gulp.src - путь по которому лежит scss-файл который мы будем компилировать
// gulp.dest - путь в который мы будем генерить нашу css-ку
// plumber() - не выбрасывать из компилятора если есть ошибки
// errLogToConsole: true - выводить номер строки в которой допущена ошибка
// prefixer - добавляем префиксы для последних 15 версий браузеров
// cssmin - минимизируют css
// rename - добавляет суффикс min и записываем файл в папку css
gulp.task('sass', function () {
    gulp.src('source/scss/**.scss')
    .pipe(plumber())
    .pipe(sass({
        includePaths: require('node-normalize-scss').includePaths,
        errLogToConsole: true
    }))
    .pipe(prefixer({browsers:['last 15 versions'], cascade: true }))
    // в файле настройки csscomb: csscomb.json изменил
    // "space-before-opening-brace": "\n" на "space-before-opening-brace": "1"
    // для того, чтобы перед открывающими скобками ставился пробел, а не перенос
    // на новую строку
    // и "block-indent": "    " на "block-indent": "  " для того, чтобы было 2 пробела, а не 4
    .pipe(csscomb())
    .pipe(gulp.dest('release/css'))
    .pipe(cssmin())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('release/css'))
});

//Тут все просто, мы полностью просматривает папку в которой лежит scss-файл который 
//мы хотим скомпилировать, и при любом изменении файлов в этой папки запускаем задание 
//sass (gulp.task('sass))
gulp.task('default', function() {
    gulp.run('sass');
    gulp.watch('source/scss/**', function(event) {
        gulp.run('sass');
    });
});