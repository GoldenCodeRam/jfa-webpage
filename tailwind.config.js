/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.{blade.php,html,js,svelte,ts}"],
    theme: {
        extend: {
            colors: {
                "jfa-primary-blue": "#082f49",
                "jfa-primary-gray": "#f3f4f6",
            },
        },
    },
    plugins: [],
};
