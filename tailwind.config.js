import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js"

    ],

    theme: {
        colors:{
            'customgray':'#1D3557',
            'customDarkGray':'#192f4d',
            'highlightColor':'#264573',

        },

        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
                'lalezar':['Lalezar','Lateef']
            },
        },
    },

    plugins: [forms,
              require('flowbite/plugin')],
        darkMode: "class"
};
