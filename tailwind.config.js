/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'false' ,
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js" ,
    "./node_modules/tw-elements/js/**/*.js"
    
  ],
  theme: {
    extend: {
      colors:{
        primary: {'auto':'#1e429f' ,'light':'#072675'}
      },
        
      height:{
        'card' :'30rem'
      } ,
      fontFamily: {
        'body': [
      'Inter', 
      'ui-sans-serif', 
      'system-ui', 
      '-apple-system', 
      'system-ui', 
      'Segoe UI', 
      'Roboto', 
      'Helvetica Neue', 
      'Arial', 
      'Noto Sans', 
      'sans-serif', 
      'Apple Color Emoji', 
      'Segoe UI Emoji', 
      'Segoe UI Symbol', 
      'Noto Color Emoji'
    ],
        'sans': [
      'Inter', 
      'ui-sans-serif', 
      'system-ui', 
      '-apple-system', 
      'system-ui', 
      'Segoe UI', 
      'Roboto', 
      'Helvetica Neue', 
      'Arial', 
      'Noto Sans', 
      'sans-serif', 
      'Apple Color Emoji', 
      'Segoe UI Emoji', 
      'Segoe UI Symbol', 
      'Noto Color Emoji'
    ]
      }
  }
  
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/forms'),
    

  ],
}