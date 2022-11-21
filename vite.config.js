import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js',],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@assets': '/resources/assets/',
            '@styles': '/resources/scss/',
            '@fonts': '/resources/fonts/',
            '@assets': '/resources/assets/',
            '@includes': '/resources/scss/includes/',
        },
    },
});
