/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html",
    "./*.php",
    "./include/**/*.php",
    "./**/*.html",
    "./**/*.php",
    "!./node_modules/**"
  ],
  theme: {
    extend: {
      colors: {
        /* Page 1 - Dubai */
        'gold-main': '#c9a45c',
        'gold-lt':   '#e8c87a',
        'gold-dk':   '#9f7c3b',
        'navy-p1':   '#0d1b2e',
        'n2':        '#112032',
        'n3':        '#172d43',
        'cream':     '#f8f4ee',
        'parch':     '#f0e9da',

        /* Page 2 - Harison / Dholera */
        navy:    '#0D1B3E',
        navy2:   '#162248',
        rblue:   '#1A4DB3',
        rmid:    '#2563EB',
        rlt:     '#DBEAFE',
        gold:    '#B08840',
        goldlt:  '#E8C97A',
        goldpal: '#FBF5E6',
        rg:      '#F5F6FA',
        rs2:     '#F0F2F8',
        rbdr:    '#E2E6F0',
        rbds:    '#C5CCE0',
        rtxt:    '#1A1F36',
        rtxt2:   '#3D4566',
        rmuted:  '#7B83A0',
        rgreen:  '#16A34A',
        rgnpal:  '#F0FDF4',
        ramber:  '#D97706',
        rambpal: '#FFFBEB',
        'theme-green': '#1b3e17',
      },
      fontFamily: {
        serif: ['"Cormorant Garamond"', 'Georgia', 'serif'],
        sans:  ['"DM Sans"', 'system-ui', 'sans-serif'],
        fair:  ["Playfair Display", 'serif'],
      }
    }
  },
  plugins: [],
}

