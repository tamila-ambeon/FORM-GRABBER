const mix = require('laravel-mix');

mix.combine([
    'public/css-parts/*.css',
], 'public/doc-styles-bundle.css');


mix.combine([
    'public/libraries_src/bootstrap.bundle.min.js', 
    'public/libraries_src/quill.core.js', 
    'public/libraries_src/quill.js', 
    'public/libraries_src/quill.min.js', 
    'public/libraries_src/form-grabber.js', 
], 'public/form-grabber-bundle.js');

mix.combine([
    'public/libraries_src/bootstrap.min.css', 
    'public/libraries_src/quill.core.css', 
    'public/libraries_src/quill.snow.css', 
    'public/libraries_src/quill.bubble.css', 
    'public/libraries_src/button-template.css', 
], 'public/form-grabber-bundle.css');
