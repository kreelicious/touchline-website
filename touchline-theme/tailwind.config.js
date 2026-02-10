/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './inc/**/*.php',
    './patterns/**/*.php',
    './templates/**/*.html',
    './parts/**/*.html',
    './blocks/**/*.php',
    './blocks/**/*.js'
  ],
  theme: {
    extend: {}
  },
  plugins: []
};
