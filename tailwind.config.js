/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}","./template-parts/*.{php,html,js}","./templates/*.{php,html,js}"
  ,"./classes/*.{php,html,js}","./assets/*.{php,html,js}"],
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px'
    },

  extend: {
    colors: {
      black: '#000',
      contentblack: '#383838',
      pink: '#DE7980',
      ocean: '#E1F4FA'
    },

    fontSize: {
      16: '1rem',
      20: '1.25rem',
      28: '1.75rem',
      40: '2.5rem'
    },
  },
},

  plugins: [],
}
