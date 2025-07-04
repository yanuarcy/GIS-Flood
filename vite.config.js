import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/Map/DropdownKategori.scss',
                'resources/sass/Map/index.scss',
                'resources/sass/Map/_variables.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
