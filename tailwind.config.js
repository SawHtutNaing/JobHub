/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'false' ,
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js"
    
  ],
  theme: {
    extend: {
      height:{
        'card' :'20rem'
      } ,
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
        serif: ['Merriweather', 'serif'],
        mono: ['Fira Code', 'monospace']
      
    }
  }
  },
  plugins: [
    require('flowbite/plugin')

  ],
}