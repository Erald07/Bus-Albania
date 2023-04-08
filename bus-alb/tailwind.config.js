/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'sheshi-skenderbeu': "url({{ asset('./public/assets/images/sheshiSkenderbeu.jpg') }})"
      },
      colors: {
        'primary': '#6d28d9',
        'secondary': '#be185d',
      },
    },
    container: {
      center: true,
      screens: {
        lg: "1024px",
        xl: "1280px",
        "2xl": "1301px"
      },
    },
  },
  plugins: [],
}

