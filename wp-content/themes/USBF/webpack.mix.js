let mix = require('laravel-mix')

mix.autoload({
	jquery: ['$', 'window.$', 'jQuery', 'window.jQuery'],
})

mix.js('src/js/app.js', 'public').setPublicPath('public')

mix.sass('src/scss/app.scss', 'public', {
	// Rewrite CSS urls for app.scss
	processUrls: false,
}).setPublicPath('public')

if (!mix.inProduction()) {
	mix.sourceMaps()
	mix.webpackConfig({
		devtool: 'inline-source-map',
		stats: {
			children: true,
		},
	})
}
