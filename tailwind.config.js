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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'grayish': 'rgb(var(--color-grayish) / <alpha-value>)',
                'soft-blue': 'rgb(var(--color-soft-blue) / <alpha-value>)',
                'desaturated-blue': 'rgb(var(--color-desaturated-blue) / <alpha-value>)',
                'dark-blue': 'rgb(var(--color-dark-blue) / <alpha-value>)',
            }
        },
    },

    plugins: [forms],
};
