/** @type {import('tailwindcss').Config} */
module.exports = {
  content:[
    "**.php",
    "admin/**.php"
  ],
  theme: {
    container:{
      center: true,
      padding: '16px',
    },
    extend: {
      colors:{
        primary: '#fbbf24',
        primary_lite: '#fcd34d',
        dark: '#0c4a6e',
        footer: '#0f172a',
      },
      screens:{
        '2xl': '1320px',
      }
    },
  },
  plugins: [],
}
