const glob = require('glob');
const path = require('path');

module.exports = {
    entry: glob.sync('./src/**/index.js').reduce((acc, path) => {
        const entry = path.replace('/index.js', '')
        acc[entry] = path
        return acc
    }, {}),
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'build'),
        clean: true,
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: ['babel-loader']
            }
        ]
    },
};