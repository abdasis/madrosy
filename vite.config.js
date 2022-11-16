import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
            ],
        }),
    ],

    server: {
        https: false,
        host: '127.0.0.1',
        port: 3000,
    },
});
