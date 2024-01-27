/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {
            backdropBlur: {
               nn : "10px",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                salsa: ["Salsa", "cursive"],
            },
            fontSize: {
                x12: "10rem",
                sss: "0.5rem",
            },
        },
    },
    plugins: [],
};
