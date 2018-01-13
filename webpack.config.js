module.exports = {
  entry: {
    client: './client-entry-point.js',
    server: './server-entry-point.js'
  },
  output: {
    filename: '[name].js',
    path: __dirname + '/web'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['babel-preset-env']
          }
        }
      },
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      }
    ]
  },
  stats: {
    colors: true
  },
  resolve: {
    alias: {
      vue: 'vue/dist/vue.js'
    }
  }
}
