/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.php"],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#10b981',
      },
    },
  },
  plugins: [],
}
