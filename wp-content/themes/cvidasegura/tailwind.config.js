/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php"],
  theme: {
    colors: {
      white: '#fff',
      black: '#000',
      gray: {
        DEFAULT: "#D9D9D9",
        medium: '#005791',
        dark: '#262626',
      },
      green: '#61CE70',
      blue: {
        DEFAULT: '#1669B1',
        dark: '#1b2c4f',
      },
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '1.5xl': '1440px',
      '2xl': '1536px',
    },
    extend: {
      backgroundImage: {
        'swiper-button-navigation': 'url("/src/icon/arrow-right-circle.svg")',
      }
    },
    fontFamily: {
      'roboto': ['Roboto', "sans-serif"],
      'montserrat': ['Montserrat', "sans-serif"],
    },
  },
  variants: {},
  safelist: [
    'font-roboto',
    'font-montserrat',
    {
      pattern:
        /(bg|text|border)-(gray|blue)-(light|dark|meidum|ultradark)/,
      variants: ['before', 'after', 'hover', 'focus', 'lg:hover'],
    },
  ],
  plugins: [
  ],
}

