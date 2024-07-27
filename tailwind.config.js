/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'primary' : 'var(--primary-color)',
        'secondary' : 'var(--secondary-color)',

      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
