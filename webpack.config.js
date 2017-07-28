const webpack = require('webpack')
const path = require('path');

module.exports = {
    entry: './assets/js/main.js',
    output: {
        path: path.resolve(__dirname, './assets/js'),
        publicPath: path.resolve(__dirname, './assets/js'),
        filename: 'managx.js'
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                loader: "babel-loader?presets[]=es2015&comments=false"
            }
        ]
    }
}
