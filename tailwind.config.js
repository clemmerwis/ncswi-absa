const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        extend: {},
        maxWidth: {
            '1/4': '25%',
            '1/2': '50%',
            '2/3': '66.666667%',
            '3/4': '75%',
            '9/10': '90%',
            '95': '95%'
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            indigo: colors.indigo,
            red: colors.rose,
            yellow: colors.amber,
            secondaryorange: '#ff7300',
            primarynavyblue: '#000e2d',
            drkblue: '#111827',
            medblue: '#001935',
            lhtblue: '#2064C5',
            highlightblue: '#106eea',
            greensuccess: '#00cc00',
            redfail: '#ca1f1f',
            playfulblue: '#d0e5fb'
        },
        listStyleType: {
            alpha: 'lower-alpha',
            disc: 'disc'
        }
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
