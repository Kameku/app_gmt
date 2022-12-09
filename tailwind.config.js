const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'jose': ['Josefin Sans'],
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'netikom-mo': 'rgb(136,72,150)',
                'netikom-mo-100': 'rgba(136,72,150,.07)',
                'netikom-mo-400': 'rgba(136,72,150,.4)',
                'netikom-mo-600': 'rgba(69,38,72,.5)',
                'netikom-mo-900': 'rgba(69,38,72,1)',
                'netikom-na': 'rgb(239,123,96)',
                'netikom-na-500': 'rgb(151,76,59,.5)',
                'netikom-na-900': 'rgb(151,76,59,1)',
                'netikom-am': 'rgb(255,210,105)',
                'netikom-am-100': 'rgba(255,210,105,.05)',
                'netikom-ro': 'rgb(233,66,144)',
                'gmt-200': 'rgb(0,21,92,.2)',
                'gmt-500': 'rgb(0,21,92,.5)',
                'gmt-700': 'rgb(0,21,92,.7)',
                'gmt-900': 'rgb(0,21,92,1)',

                'gmtC-900': 'rgb(0,42,132,1)',
                'gmtC-700': 'rgb(0,42,132,.7)',
                'gmtC-500': 'rgb(0,42,132,.5)',
                'gmtC-200': 'rgb(0,42,132,.2)',
                'white-200': 'rgb(256,256,256,.2)',
                'white-300': 'rgb(256,256,256,.3)',
                'white-400': 'rgb(256,256,256,.4)',
                'white-500': 'rgb(256,256,256,.5)',
                'white-600': 'rgb(256,256,256,.6)',
                'white-700': 'rgb(256,256,256,.7)',
              },
              height: {
                'h-perso': '90%',
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
