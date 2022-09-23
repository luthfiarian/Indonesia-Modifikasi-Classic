/*
Magang Umsida Periode 2022 - Quartal Ke-9
Author: PT INTI MAJU CEMERLANG
Licensed to PT INTI MAJU CEMERLANG
Thanks to :
    > Iwan Setiawan - As The Owner Of The Company
    > Adinata Setiawan - Project Supervisor
Contributor & Credit: 
    > Luthfi Arian Nugraha - Fullstack - Project Leader (University Advisor : Sukma Aji, S.T., S.Kom.)
    > Yusuf Raharja - Frontend - Member Project (University Advisor : Novia Ariyanti, S.Si., M.Pd.)
    > Reyhan Adi Saputra - Frontend - Member Project (University Advisor : Novia Ariyanti, S.Si., M.Pd.)
    > Davito Rasendriya Rizqullah Putra - Wordpress - Member Project (University Advisor : Sukma Aji, S.T., S.Kom.)
*/

/** @type {import('tailwindcss').Config} */
module.exports = {
  content:[
    "**.php",
    "admin/**.php",
    "update/**.php"
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
