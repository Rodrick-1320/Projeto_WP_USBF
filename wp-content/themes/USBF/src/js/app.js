// Plugins
global.$ = global.jQuery = require('jquery')
require('@popperjs/core')
require('bootstrap')
require('axios')
require('slick-carousel')
require('jquery-validation')
require('jquery-mask-plugin')

// All Imports
import Header from './main/header'

$(document).ready(function () {
	new Header()

	$('.autoplay').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	})
})