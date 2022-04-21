const colors = require("tailwindcss/colors");
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      'first': '#f98747',
      'second': '#f2f6f7',
      'third': '#2c2c2c',
      'four': '#7b7b7b',
      'five': '#171b2a',
      'six': '#282b38',
    },
    extend: {},
    backgroundSize: {
      'auto': 'auto',
      'cover': 'cover',
      'contain': 'contain',
      '50%': '50%',     
    }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}