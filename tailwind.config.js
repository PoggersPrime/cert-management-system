/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            transitionProperty: {
                transform: "transform",
            },
        },
    },
    variants: {
        extend: {
            translate: [
                "responsive",
                "hover",
                "focus",
                "active",
                "group-hover",
            ],
        },
    },
    plugins: [],
};
