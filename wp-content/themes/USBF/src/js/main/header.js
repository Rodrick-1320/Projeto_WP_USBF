export default class Header {
	constructor() {
		this.init()
	}

	init = () => {
		const author = 'Italo Costa'
		const emoji = '👨🏻‍💻'
		console.info(`Developed by: ${author}${emoji}`)
	}
}

// barra de navegação no mobile

var btnToggleMenu = document.getElementById("btnToggleMenu");
var mainHeader = document.getElementById("mainHeader");

btnToggleMenu.addEventListener('click', function() {
    mainHeader.classList.toggle('open')
})

// barra de pesquisa

var btnToggleSearch = document.getElementById("btnToggleSearch");
var x = document.getElementById("x");

// btnToggleSearch.addEventListener('click', function() {
// 	x.classList.toggle('active')
// })

// apagar texto

var input = document.getElementById('text')

function eraseText() {
	input.value = ''
}

var x = document.getElementById('x');
x.addEventListener('click', () => {
	eraseText()
})

btnToggleSearch.addEventListener('click', () => {
	console.log('rudrigu');
	eraseText()
})

