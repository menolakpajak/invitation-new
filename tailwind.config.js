const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: ["./theme/**/*.{js,php}"],
    theme: {
        extend: {},
        screens: {
            tablet: {
                max: "768px",
            },
            phone: {
                max: "640px",
            },
        },
    },
    plugins: [
        plugin(function ({ addVariant }) {
            addVariant("active", ["&:hover", "&:focus", "&.active"]);
        }),
    ],
};
