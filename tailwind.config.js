import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                maincraft: ['ChavaRegular'],
                error: ['PerfectDOSVGA437'],
                neutral: ['InvolveMedium'],
                cursive: ['InvolveMediumOblique'],
                titlecursive: ['InvolveBoldOblique'],
                title: ['InvolveBold'],
            },
        },
    },

    plugins: [forms, typography],
};