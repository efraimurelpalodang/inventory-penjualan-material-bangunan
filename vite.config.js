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
            theme: {
                extend: {
                    colors: {
                        background: {
                            DEFAULT: "#F9FAFB", 
                            light: "#FFFFFF", 
                            border: "#E5E7EB", 
                            input: "#F3F4F6", 
                        },

                        text: {
                            DEFAULT: "#111827", 
                            secondary: "#6B7280", 
                            muted: "#9CA3AF",
                            link: "#2563EB",
                        },

                        // Aksen & Status
                        state: {
                            active: "#22C55E", 
                            disabled: "#9CA3AF", 
                            full: "#3B82F6", 
                            limited: "#6B7280",
                            readonly: "#FBBF24", 
                        },

                        // Tombol & Ikon
                        button: {
                            primary: "#3B82F6",
                            primaryHover: "#2563EB", 
                            text: "#FFFFFF",
                        },
                        icon: {
                            green: "#16A34A",
                            gray: "#9CA3AF",
                        },

                        // Sidebar Highlight
                        sidebar: {
                            activeBg: "#E0F2FE",
                            activeText: "#1E3A8A",
                            logoBg: "#1E3A8A",
                        },
                    },
                },
            },
        }),
    ],
});
