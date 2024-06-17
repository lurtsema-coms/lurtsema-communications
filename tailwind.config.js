/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                besbas: ["Bebas Neue", "sans-serif"],
            },
            colors: {
                "custom-blue": "rgb(4, 32, 44)",
                "primary-blue": "#1d4867",
                "button-blue": "#3fb1da",
            },
            backgroundImage: {
                "custom-gradient":
                    "linear-gradient(to left, rgba(13, 39, 55, 1) 0%, rgba(92, 151, 201, 1) 50%, rgba(13, 39, 55, 1) 100%)",
                "custom-gradient-2":
                    "linear-gradient(to bottom, rgb(0, 0, 0), rgb(0, 0, 0), rgb(0, 0, 0), rgba(5, 15, 22, 0.811), rgb(13, 39, 55, 0.400));",
            },
        },
    },
    plugins: [],
};
