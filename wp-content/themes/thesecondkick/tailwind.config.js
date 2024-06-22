/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./template-parts/*.{php,html,js}", "./*.{php,html,js}"],
  theme: {
    borderRadius: {
      none: "0",
      sm: "0.125rem",
      DEFAULT: "0.25rem",
      DEFAULT: "4px",
      md: "0.375rem",
      lg: "0.5rem",
      full: "9999px",
      large: "12px",
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
      colors: {
        primary: "#221E3C",
      },
    },
  },
  plugins: [],
};
