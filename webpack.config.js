const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { WebpackManifestPlugin } = require("webpack-manifest-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = {
  entry: "./assets/src/js/main.js",

  output: {
    path: path.resolve(__dirname, "assets/dist"),
    filename: "js/main.js",
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        type: "javascript/auto",
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          "sass-loader",
        ],
      },
    ],
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: "css/main.[contenthash].css",
    }),

    new WebpackManifestPlugin({
      fileName: "manifest.json",
      publicPath: "",
    }),

    new BrowserSyncPlugin(
      {
        proxy: "http://anti-ai",
        files: ["**/*.php"],
        injectChanges: true,
        reloadDelay: 0,
      },
      {
        reload: true,
      }
    ),
  ],
};
