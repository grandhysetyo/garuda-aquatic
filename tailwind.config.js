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
      'second': '#4a85af',
      'third': '#4c4e4d',
      'four': '#edefee',
      'five': '#f6f6f6',
    },
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}