/** @type {import('tailwindcss').Config} */
export default {
  content: [
    // Memberitahu Tailwind untuk scan semua file blade.php di folder resources
    "./resources/**/*.blade.php",

    // Memberitahu Tailwind untuk scan semua file javascript di folder resources
    "./resources/**/*.js",

    // (Opsional) Tambahkan ini jika Anda menggunakan Vue.js
    // "./resources/**/*.vue",

    // Memberitahu Tailwind untuk scan file pagination bawaan Laravel
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}