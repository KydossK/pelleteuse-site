/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: '#DE7C23',
        gold1: '#DEAC23',
        gold2: '#DE9E23',
        gold3: '#DE9023',
        gold4: '#DE6823',
        soft: '#DFA27F',
      },
    },
  },
  plugins: [],
};
