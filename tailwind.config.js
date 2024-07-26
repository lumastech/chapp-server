import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // orange color shades
                primary: {
                    50: "#e0f7f7",
                    100: "#b3ecec",
                    200: "#80e0e0",
                    300: "#4dd5d5",
                    400: "#1ac9c9",
                    500: "#00bfbf",
                    600: "#00a3a3",
                    700: "#008787",
                    800: "#006b6b",
                    900: "#005757",
                },
                secondary: {
                    10: "#F4F8F9",
                    50: "#ECF1F3",
                    100: "#DCE5E9",
                    200: "#C6D5DB",
                    300: "#AEC2CB",
                    400: "#98AEBC",
                    500: "#8296A9",
                    600: "#778899",
                    700: "#5B6A78",
                    800: "#4D5862",
                    900: "#1F2937",
                },
            },
            spacing: {
                130: "38rem",
                98: "28rem",
            },
        },
    },

    plugins: [forms, typography],
};
