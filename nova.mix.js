const mix = require('laravel-mix')

class NovaExtension {
  webpackConfig(webpackConfig) {
    webpackConfig.externals = {
      vue: 'Vue',
    }
  }
}

mix.extend('nova', new NovaExtension())
