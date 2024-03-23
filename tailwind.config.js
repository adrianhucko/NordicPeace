import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
          fontFamily: {
            'rem': ['REM'],
            'man': ['Manrope'],
          },
          borderRadius: {
            'bo-sm': '15px',
            'bo': '18px',
            'bo2': '20px',
          },
          width: {
            '66': '269px',
            '75': '295px',
            '77': '300px',
            '84': '355px',
            '100': '400px',
            '105': '410px',
            '110': '420px',
            '120': '512px',
          },
          spacing: {
          '5.5': '22px',
          '6.4': '25px',
          '6.5': '26px',
          '8.5': '34px',
          '18': '70px',
          '22': '84px',
          '26': '108px',
          '27': '111px',
          '34': '134px',
          '46': '188px',
          '150': '600px',
          },
          dropShadow: {
            'sharpS': '2px 2px 1px rgba(0, 0, 0, 0.25)',
          },
          strokeWidth: {
            '1.5': '1.5px',
            '2': '2px',
            '2.5': '2.5px'
          },
        },
      },

    variants: {
        extend: {
        backgroundColor: ["hover", "focus", "active"],
        },
    },


    
    plugins: [
        require('tailwind-scrollbar-hide')
    ],
    
};




// /** @type {import('tailwindcss').Config} */
// module.exports = {
//     content: [
//       "./resources/**/*.blade.php",
//       "./resources/**/*.vue",
//     ],

//   }
  