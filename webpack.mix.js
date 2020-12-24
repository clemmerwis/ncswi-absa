const mix = require('laravel-mix');
// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .options({
//         processCssUrls: false,
//         postCss: [ tailwindcss('./tailwind.config.js') ],
//     })
mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ])
    .sass("resources/sass/style.scss", "public/css")
    // .browserSync({
    //   proxy: 'localhost:80',
    //   open: false, 
    // });
