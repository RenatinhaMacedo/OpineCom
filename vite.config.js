import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/sass/create.scss",
                "resources/sass/login.scss",
                "resources/sass/home.scss",
            ],
            refresh: true,
        }),
    ],
});
