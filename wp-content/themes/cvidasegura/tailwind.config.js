/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php"],
  theme: {
    colors: {
      white: '#fff',
      black: '#000',
      gray: {
        DEFAULT: "#D9D9D9",
        dark: '#262626',
      },
      green: '#61CE70',
      blue: {
        DEFAULT: '#1669B1',
        medium: '#315398',
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
        'swiper-button-navigation': 'url("../../library/icons/arrow-right-circle.svg")',
        'facebook': 'url("../../library/icons/facebook-consultoria-vida-segura-white.svg")',
        'instagram': 'url("../../library/icons/instagram-consultoria-vida-segura-white.svg")',
        'email': 'url("../../library/icons/email-consultoria-vida-segura-white.svg")',
        'phone': 'url("../../library/icons/phone-consultoria-vida-segura-white.svg")',
        'whatsapp': 'url("../../library/icons/whatsapp-consultoria-vida-segura-white.svg")',
        'menu-mobile': 'url("../../library/icons/menu-icon.svg")',
        'close-menu-mobile': 'url("../../library/icons/close-menu-icon.svg")',
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
    '!flex',
    '!overflow-hidden',
    'gay-y-5',
    'gap-y-0',    
    {
      pattern:
        /(bg|text|border)-(gray|blue)-(light|dark|meidum|ultradark)/,
      variants: ['before', 'after', 'hover', 'focus', 'lg:hover'],
    },
  ],
  plugins: [
  ],
}

