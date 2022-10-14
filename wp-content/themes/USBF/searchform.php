<form action="<?= home_url(); ?>" class="separator-articles__form" method="GET" role="search">

  <div class="separator-articles__wrapper-input" id="wrapperInput">
  
    <button type="submit" id="btnToggleSearch" class="separator-articles__lupinha" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" onchange="event.preventDefault()">
      <span><img src="<?= get_template_directory_uri(); ?>/src/images/img1.png" alt=""></span>
    </button>

    <div class="collapse collapse-horizontal" id="collapseWidthExample">
      <input onclick="event.preventDefault()" class="separator-articles__search" id="text" type="text" name="s" placeholder="BUSCAR" value="<?= $s ? $s : ''; ?>" required>
    </div>

    <button class="separator-articles__x" id="x" onclick="event.preventDefault(), eraseText()">
      <img src="<?= get_template_directory_uri(); ?>/src/images/x.png" alt="">
    </button>

  </div>
</form> 

<!-- <script>

var btnToggleSearch = document.getElementById("btnToggleSearch");


var input = document.getElementById('text')

function eraseText() {
	input.value = ''
}

btnToggleSearch.addEventListener('click', () => {
	console.log('rudrigu');
  event.preventDefault();
	eraseText()
})

</script> -->



