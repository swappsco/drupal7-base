var webpack = require('webpack');
var path = require('path');

var MODULE_APP_DIR = path.resolve(__dirname, 'assets');
var MODULE_BUILD_DIR = path.resolve(__dirname, 'dist');

var config = {
  entry: [MODULE_APP_DIR + '/js/main.js', MODULE_APP_DIR + '/styles/main.scss'],
  module : {
    loaders: [
      {
        test: /\.js$/,
        include : MODULE_APP_DIR,
        loaders: 'babel-loader',
        query:{
          presets: ['es2015'],
        }
      },
      {
        test: /\.exec\.js$/,
        use: [ 'script-loader' ]
      },
      {
        test: /\.js$/,
        loader: 'babel-loader',
      },
      {
        test: /\.(jpe?g|png|gif|svg)$/i,
        loader: "url-loader"
      },
      {
        test: /\.scss$/,
        loaders: ['style-loader', 'css-loader', 'sass-loader']
      },
      {
        test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: ['url-loader']
      },
      {
        test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: ['file-loader']
      }
    ]
  },
  output: {
    path: MODULE_BUILD_DIR + '/js',
    filename: 'main.js'
  },
};

module.exports = config;
