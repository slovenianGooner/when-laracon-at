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
        }
    },
  },
  plugins: [],
}

