import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js',],
            refresh: true,
        }),
    ],
    build: { assetsInlineLimit: 0 },
    resolve: {
        alias: {
            '@assets': '/resources/assets/',
            '@styles': '/resources/scss/',
            '@fonts': '/resources/fonts/',
            '@includes': '/resources/scss/includes/',
        },
    },
});
