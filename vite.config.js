import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/less/app.less',
                'resources/less/app2.less',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                // Silence Sass deprecation warnings for Bootstrap compatibility
                silenceDeprecations: [
                    'import',
                    'color-functions',
                    'global-builtin',
                ],
            },
        },
    },
});
