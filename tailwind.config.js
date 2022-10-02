/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
    darkMode: 'class',
    mode: 'jit',
    content: [
        'resources/views/index.blade.php',
        'resources/js/app.js',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors:{
                'black': '#131316',
                'trueBlack': '#000000',
                'blue': '#307ABA',
                'orange': '#F39E19',
                transparent: 'transparent',
                current: 'currentColor',
                // black: colors.black,
                white: colors.white,
                gray: colors.gray,
                emerald: colors.emerald,
                indigo: colors.indigo,
                yellow: colors.yellow,
            }
        },
    },
    plugins: [],
}
