/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    corePlugins: {
        fontSize: false,
    },
    content: ["./html/**/*.{html,js}", "*.{html,js}"],
    theme: {
        extend: {
            fontFamily: {
                league: "League Gothic",
                avenir: "Mulish",
            },
            colors: {
                'customColor1': "#C06520",
                'bottleMizu': "#595958",
                'bottlebarb': "#173f87",
                'bottleTourb': "#4a6060",
                'bottleOri': "#975656",
            }

        },
    },
    plugins: [
        require("tailwindcss-fluid-type")({
            // your fluid type settings
            // works only with unitless numbers
            // This numbers are the defaults settings
            settings: {
                fontSizeMin: 1.125, // 1.125rem === 18px
                fontSizeMax: 1.25, // 1.25rem === 20px
                ratioMin: 1.125, // Multiplicator Min
                ratioMax: 1.2, // Multiplicator Max
                screenMin: 20, // 20rem === 320px
                screenMax: 96, // 96rem === 1536px
                unit: "rem", // default is rem but it's also possible to use 'px'
                prefix: "", // set a prefix to use it alongside the default font sizes
                extendValues: true, // When you set extendValues to true it will extend the default values. Set it to false to overwrite the values.
            },
            // Creates the text-xx classes
            // This are the default settings and analog to the tailwindcss defaults
            // Each `lineHeight` is set unitless and we think that's the way to go especially in context with fluid type.
            values: {
                xs: [-2, 1.6],
                sm: [-1, 1.6],
                base: [0, 1.6],
                lg: [1, 1.6],
                xl: [2, 1.2],
                "2xl": [3, 1.2],
                "3xl": [4, 1.2],
                "4xl": [5, 1.1],
                "5xl": [6, 1.1],
                "6xl": [7, 1.1],
                "7xl": [8, 1],
                "8xl": [9, 1],
                "9xl": [10, 1],
                "10xl": [11, 1],
                "11xl": [12, 1],
            },
        }),
    ],
    variants: {
        fluidType: ["responsive"],
    },
}

