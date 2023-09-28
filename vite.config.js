import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: true,
        // host: 'site',
        // port: 3000,
        // strictPort: true,
        hmr: {
            // host: '159.203.35.210',
            host: '127.0.0.1'
            // clientPort: 80,
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
