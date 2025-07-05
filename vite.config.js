import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/DropdownKategori.css',
                'resources/css/leaflet.css',
                'resources/css/qgis2web.css'
            ],
            refresh: true,
        }),
    ],
});
