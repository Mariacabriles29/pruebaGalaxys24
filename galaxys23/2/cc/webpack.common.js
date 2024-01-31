const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const uglifyJsContents = require('uglify-js');

module.exports = {
  entry: {
    index: './index.js'
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name].[contenthash].js',
    // sourceMapFilename: '[name].[hash:8].map',
    // chunkFilename: '[id].[hash:8].js'
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader'],
      },
      {
        test: /\.(png|jpg|gif|svg|eot|ttf|woff|woff2)$/,
        loader: 'url-loader',
        options: {
          limit: 10000,
        },
      },
    ],
  },
  plugins: [
    new HtmlWebpackPlugin({
      title: 'iphoneXs4',
      template: 'index.php',
      filename: 'index.php'
    }),
    new CopyWebpackPlugin([
      { from: 'files/*.js', to: '', cache: true },
      { from: 'files/*.css', to: '', cache: true },
      { from: 'files/*.png', to: '', cache: true },
      { from: 'files/*.jpg', to: '', cache: true },
      { from: 'files/*.gif', to: '', cache: true },
      { from: 'imagenes/*.ico', to: '', cache: true },
      { from: 'imagenes/*.png', to: '', cache: true },
      { from: 'imagenes/*.jpg', to: '', cache: true },
      { from: 'legal/*.html', to: '', cache: true },
      { from: 'js/*.js', to: '', cache: true },
      { from: 'css/*.css', to: '', cache: true },
      { from: 'tos.html', to: '', cache: true },
      { from: 'tos-es.html', to: '', cache: true },
      { from: 'tos-fr.html', to: '', cache: true },
      { from: 'thank-you/**/*', to: '', cache: true },
      { from: 'declined/**/*', to: '', cache: true },
    ], { debug: 'info' })
  ]
};
