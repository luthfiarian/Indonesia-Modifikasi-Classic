/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.php'],
  theme: {
    container:{
      center: true,
      padding: '16px',
    },
    extend: {
      colors:{
        primary: '#fbbf24',
        dark: '#0c4a6e',
      },
      screens:{
        '2xl': '1320px',
      }
    },
  },
  plugins: [],
}
