const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    // Copie o CSS do FontAwesome para a pasta public
    .copy('node_modules/@fortawesome/fontawesome-free/css/all.css', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
