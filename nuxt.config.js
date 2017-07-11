const { join } = require('path')

module.exports = {
    head: {
        titleTemplate: '%s / Hyn tenancy',
        meta: [
            {charset: 'utf-8'},
            {name: 'viewport', content: 'width=device-width, initial-scale=1'},
            {
                hid: 'description',
                name: 'description',
                content: 'Hyn multi tenancy for Laravel 5.3 and up. Tested, proven, unobtrusive tenancy package.'
            }
        ],
        link: [
            { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Lato' },
            { rel: 'shortcut icon', href: '/favicon.png'}
        ]
    },
    plugins: ['~plugins/vuetify', '~plugins/highlight.js'],
    css: [
        { src: join(__dirname, 'css/app.styl'), lang: 'styl' },
        { src: join(__dirname, 'node_modules/mdi/css/materialdesignicons.css')}
    ],
    loading: {
        color: "#bf1e2e"
    }
}
