/* @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        futura: ["FuturaPT", "sans-serif"],
      },
      fontSize: {
        "fluid-xs": "clamp(16px, 1.2vw, 20px)",
        "fluid-md": "clamp(16px, 3.5vw, 24px)",
        "fluid-lg": "clamp(30px, 7vw, 74px)",
        "fluid-xl": "clamp(60px, 7vw, 135px)",
        "fluid-btn": "clamp(44px, 7vw, 60px)",
      },
      colors: {
        primary: "#EAE9F3",
        secondary: "#0E1014",
        "button-bg": "#7271EF",
      },
      maxWidth: {
        container: "1624px",
      },
      keyframes: {
        fadeInScale: {
          "0%": { opacity: "0", transform: "scale(1.05)" },
          "100%": { opacity: "1", transform: "scale(1)" },
        },
      },
      animation: {
        fadeInScale: "fadeInScale 1.2s ease-out forwards",
      },
    },
  },
  plugins: [],
};
