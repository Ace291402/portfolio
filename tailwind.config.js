import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: '#8455ef',
                'primary-dim': '#683be0',
                tertiary: '#ba9eff',
                background: '#060e20',
                'surface-container': '#091328',
                'surface-container-low': '#0b1830',
                'surface-container-lowest': '#0f1f3d',
                'on-surface': '#dee5ff',
                'on-surface-variant': '#a3b2ff',
                'on-primary-fixed': '#ffffff',
                'outline-variant': '#5f6faa',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
