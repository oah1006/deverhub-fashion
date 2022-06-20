/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'red-radial-gradient': 'radial-gradient(50% 50% at 50% 50%,#eb4432 0,hsla(0,0%,100%,0) 100%)',
        'blue-radial-gradient': 'radial-gradient(50% 50% at 50% 50%,#22d3ee 0,hsla(0,0%,100%,0) 100%)'
      }
    },
  },
  plugins: [],
}
