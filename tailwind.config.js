/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",    // Mendukung Blade template
    "./resources/**/*.js", 
    "./resources/**/*.jsx",          // Mendukung file JavaScript
    "./resources/**/*.css",         // Menambahkan SCSS agar bisa di-scan oleh Tailwind
    "./resources/**/*.vue",          // Mendukung Vue.js jika digunakan
  ],
  theme: {
    extend: {
      colors: {
        gray: {
          300: '#D1D5DB',  // Menambahkan warna gray custom
        },
      },
      animation: {
        'fade-in-down': 'fadeInDown 1s ease-out',   // Animasi untuk fade-in dengan transisi dari bawah
        'fade-in-up': 'fadeInUp 0.8s ease-out forwards', // Animasi untuk fade-in dengan transisi dari atas
      },
      keyframes: {
        fadeInDown: {
          '0%': { opacity: 0, transform: 'translateY(20px)' },
          '100%': { opacity: 1, transform: 'translateY(0)' },
        },
        fadeInUp: {
          '0%': { opacity: 0, transform: 'translateY(-20px)' },
          '100%': { opacity: 1, transform: 'translateY(0)' },
        },
      },
    },
  },
  plugins: [],
}
