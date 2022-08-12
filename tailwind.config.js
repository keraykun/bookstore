module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('tailwindcss-textshadow'),
    require('tailwind-scrollbar'),
    require('@tailwindcss/ui'),
  ]
}
