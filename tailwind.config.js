const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    'resources/views/index.blade.php',
    // './resources/**/*.js',
    // './resources/**/*.vue',

  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
