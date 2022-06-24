const { src, dest, watch , parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const postcss    = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');
const notify = require('gulp-notify');
const cache = require('gulp-cache');
const webp = require('gulp-webp');
const purgecss = require('gulp-purgecss');

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

// css es una función que se puede llamar automaticamente
function css(done) {
    return src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([autoprefixer(), cssnano()]))
        // .pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('.'))
        .pipe( dest('./public/build/css') );

    done();
}


function javascript(done) {
    return src(paths.js)
    //   .pipe(sourcemaps.init())
      .pipe(concat('bundle.js')) // final output file name
    //   .pipe(terser())
    //   .pipe(sourcemaps.write('.'))
    //   .pipe(rename({ suffix: '.min' }))
      .pipe(dest('./public/build/js'))

    done();
}

function imagenes(done) {
    return src(paths.imagenes)
        .pipe(cache(imagemin({ optimizationLevel: 3})))
        .pipe(dest('./public/build/img'))
        .pipe(notify({ message: 'Imagen Completada'}));

    done();
}

function versionWebp(done) {
    return src(paths.imagenes)
        .pipe( webp() )
        .pipe(dest('./public/build/img'))
        .pipe(notify({ message: 'Imagen Completada'}));

    done();
}


function watchArchivos(done) {
    watch( paths.scss, css );
    watch( paths.js, javascript );
    watch( paths.imagenes, imagenes );
    watch( paths.imagenes, versionWebp );

    done();
}

function cssBuild(done){

    src('./public/build/css/app.css')
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(purgecss({
        content: ['src/**/*.php']
    }))
    .pipe(dest('build/css'))
    done();
}
  
// exports.default = parallel(css, javascript,  imagenes, versionWebp, watchArchivos ); 
exports.default = parallel(css, javascript, watchArchivos );
exports.imagenes = parallel(imagenes, versionWebp);
exports.cssbuild = cssBuild