/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      fontFamily: {
          sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      keyframes: {
          wiggle: {
              '0%': {
                  opacity: 0
              },
              '100%': {
                  opacity: 1
              },
          }
      },
      animation: {
          wiggle: 'wiggle 1s ease-in-out',
      }
    },
  },

  variants: {
    display: ['responsive', 'group-hover', 'group-focus'],
  },
  
  plugins: [],
}

