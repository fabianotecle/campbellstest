/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./_js/**/*.js",
    "./_css/**/*.scss"
  ],
  theme: {
    container: {
      center: true, 
      screens: {
        sm: '600px',       
        md: '728px',     
        lg: '984px',        
        xl: '1240px',
      },
    },
    extend: {},
  },
  plugins: [],
}