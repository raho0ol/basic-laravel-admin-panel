import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/admin/app.scss',
                'resources/js/admin/app.js',
                'resources/js/form-builder/field.js',
            ],
            refresh: true,
        }),
    ],
});
