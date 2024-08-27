/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
            red: {
                600: 'rgb(255 45 32 / var(--tw-bg-opacity))'
            }
        },
        fontFamily: {
            sans: 'apercu,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"'
        }
    },
  },
  plugins: [],
}

