  // tailwind.config.js
  module.exports = {
    purge: [],
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
     darkMode: false, // or 'media' or 'class'
     theme: {
       extend: {
         fontFamily:{
           'title':['Sansita', 'sans-serif'],
           'body':['Lato', 'sans-serif']
         }
       },
     },
     variants: {
       extend: {},
     },
     plugins: [],
   }