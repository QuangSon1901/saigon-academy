/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.twig", 
    "../../modules/custom/custom_pre_header/templates/**/*.twig", 
    "../../modules/custom/custom_view_intro/templates/**/*.twig",
    "../../modules/custom/custom_view_background/templates/**/*.twig"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#88191c",
        secondary: "#EFF0EB",
        hover: "#a11f23",
        bSame: "#b05356"
      },
      backgroundImage: {
        'red-bg': "url('/sites/default/files/2023-03/aasas_0.png')",
        'new-bg': "url('/sites/default/files/2023-03/noname_2.png')",
        'icon-right': "url('/sites/default/files/icons/right-icon.svg')"
      },
      minHeight: {
        'section': '700px',
      },
      spacing: {
        '30px': '30px',
        '10px': '10px',
        '100px': '100px',
      },
      width: {
        '45px': '45px',
      },
      height: {
        '45px': '45px',
      }
    },
  },
  plugins: [],
}