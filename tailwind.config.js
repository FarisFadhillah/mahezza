/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors:{
        primary: '#0f172a',
        secondary: '#FF0000',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}