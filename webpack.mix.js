let mix = require('laravel-mix');

require('laravel-mix-polyfill');

mix
    .scripts([
        'resources/libs/jquery/dist/jquery.min.js',
        'resources/libs/fancybox/jquery.fancybox.min.js',
        'resources/libs/required_fields/jquery.maskedinput.min.js',
        'resources/libs/required_fields/required_fields.js',
        'resources/libs/slick-carousel/slick/slick.min.js',
        'resources/libs/matchHeight/dist/jquery.matchHeight-min.js',
        'resources/libs/jquery-accordion/js/jquery-ui-1.9.2.custom.min.js',
    ], 'public/js/all.js')
    .js('resources/js/scripts.js', 'public/js')
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        targets: false, // Используем настройки browserslist из package.json
        debug: true,
        corejs: '3.8',
    })
    .sass('resources/sass/main.sass', 'public/css')
    .options({
        postCss: [
            require('autoprefixer')({
                cascade: false, // Отключаем выравнивание вендорных префиксов
            }),
        ]
    })
    .browserSync('e-eye')
    .version();