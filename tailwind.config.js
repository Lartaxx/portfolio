/** @type {import('tailwindcss').Config} */
export default {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
      },
      gradientColorStops: {
        'custom-gradient': ['var(--gradient-start)', 'var(--gradient-end)'],
      },
      textDecoration: {
        'gradient': 'linear-gradient(45deg,#f7b500,#b620e0,#32c5ff)'
      },
    },
  },
  plugins: [],
}

