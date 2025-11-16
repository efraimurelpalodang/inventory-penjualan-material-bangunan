import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss({
            content: [
                "./resources/**/*.blade.php",
                "./resources/**/*.js",
                "./resources/**/*.vue",
            ],
            theme: {
                extend: {
                    colors: {
                        primary: "#5D87FF",
                        secondary: "#49BEFF",
                        success: "#13DEB9",
                        info: "#539BFF",
                        warning: "#FFAE1F",
                        danger: "#FA896B",
                        dark: "#2A3547",
                        muted: "#5A6A85",
                        white: "#ffffff",
                        sidebarText: "#5A6A85",
                        light: "#F6F9FC",
                    },
                    spacing: {
                        sidebarX: "16px",
                        headerH: "80px", 
                        sidebarW: "260px", 
                    },
                    borderRadius: {
                        sidebar: "7px", 
                    },
                    boxShadow: {
                        card: "0px 0px 2px rgba(145,158,171,0.20), 0px 12px 24px -4px rgba(145,158,171,0.12)",
                    },
                    fontSize: {
                        10: "10px",
                        12: "12px",
                        14: "14px",
                        16: "16px",
                        18: "18px",
                        20: "20px",
                        30: "30px",
                    },
                },
            },
        }),
    ],
});
