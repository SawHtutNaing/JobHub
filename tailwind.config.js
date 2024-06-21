/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'false' ,
  content: [
    "./resources/**/*.blade.php",    
  ],
 
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/forms'),
    

  ],
}