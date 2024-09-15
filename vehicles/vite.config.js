import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/sass/app.scss',
                'resources/js/fetchAllVehicles.js',
                'resources/js/fetchVehicle.js',
                'resources/js/storeVehicle.js',
                'resources/js/updateVehicle.js',
                'resources/js/deleteVehicle.js',
            ],
            refresh: true,
        }),
    ],
});
