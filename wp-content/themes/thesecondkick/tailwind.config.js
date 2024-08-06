/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./template-parts/*.{php,html,js}", "./*.{php,html,js}"],
  theme: {
    fontFamily: {
      nunito: ["Nunito", "sans-serif"],
    },

    screens: {
      sm: "640px",
      // => @media (min-width: 640px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "1024px",
      // => @media (min-width: 1024px) { ... }

      xl: "1280px",
      // => @media (min-width: 1280px) { ... }
    },
    container: {
      center: true,
    },
    extend: {
      borderRadius: {
        lg: "0.5rem",
      },
      spacing: {
        10: "3rem",
        20: "96px",
        22: "128px",
        72: "288",
      },
      colors: {
        primary: {
          DEFAULT: "#221E3C",
          500: "rgba(34, 30, 60, 0.5)",
          700: "rgba(34, 30, 60, 0.8)",
        },
        "grad-red": {
          0: "rgba(211, 55, 55, 0.9)",
          100: "rgba(99, 62, 62, 1.0)",
        },
      },
      gap: {
        col: "74px",
        "col-0.5": "24px",
      },

      backgroundImage: {
        "hero-pattern":
          "url('src/assets/images/team_photo_district_league.jpeg')",
      },
    },
  },
  plugins: [],
};
