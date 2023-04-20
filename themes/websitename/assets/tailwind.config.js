module.exports = {
    content: ["../*/**.{php,html,js}", "../*.{php,html,js}"],
    theme: {
        container: {
            center: true,
            padding: '2rem'
        },
        fontFamily: {
            calibri: ['Calibri', 'sans-serif']
        },
        extend: {
            colors: {
                'white-bg': '#fbfaf8'
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms')
    ],
}
