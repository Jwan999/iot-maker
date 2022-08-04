const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        'resources/views/index.blade.php',
        // './resources/**/*.js',
        // './resources/**/*.vue',

    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        colors: {
            'black': '#131316',
            'trueBlack': '#000000',
            'blue': '#307ABA',
            'orange': '#F39E19',
            transparent: 'transparent',
            current: 'currentColor',
            // black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            indigo: colors.indigo,
            red: colors.rose,
            yellow: colors.amber,
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('tailwindcss-rtl'),

    ],
}
