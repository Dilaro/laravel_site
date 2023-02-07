import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/',
                'resources/admin_panel_style/css/',
                'resources/js/',
                'resources/admin_panel_style/js/',
            ],
            refresh: true,
        }),
    ],
});
