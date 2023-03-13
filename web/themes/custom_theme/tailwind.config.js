/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./templates/**/*.twig", "../../modules/custom/custom_pre_header/templates/**/*.twig"],
  theme: {
    extend: {
      colors: {
        primary: "#88191c",
        secondary: "#EFF0EB",
        hover: "#a11f23"
      }
    },
  },
  plugins: [],
}