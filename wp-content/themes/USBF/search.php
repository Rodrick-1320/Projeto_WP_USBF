<?php get_header(); ?>

<section class="separator-articles">
    <div class="separator-articles__container">
      <h2 class="separator-articles__h2">Artigos</h2>
      
      <?php  get_template_part( 'searchform' ); ?>

    </div>
  </section>

<section class="main-content">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="col-12 col-lg-6">
                    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                            <div class="bor">
                                <a href="<?php the_permalink() ?>" target="_blank" class="btn btn-white btn-animate">
                                    <section class="cards">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <figure class="cards__img">
                                                    <?php the_post_thumbnail('post-image', ['class' => 'cards___img']); ?>
                                                </figure>
                                            </div>
                                            <div class="wrapper-content col-12 col-lg-6">
                                                <small class="posts-list__tag">wordpress</small>
                                                <h3 class="posts-list__title"><?php the_title(); ?></h3>
                                                <p class="posts-list__content"><?php the_excerpt(); ?></p>
                                                <time class="posts-list__date"><?php the_time('j F \d\e Y') ?></time>
                                            </div>
                                        </div>
                                    </section>
                                </a>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>

                <section class="pags">
                    <div class="pag">
                        <?= custom_pagination(); ?>
                    </div>
                </section>

            </div>

            <div class="col-lg-3">

                <?php render_my_post_categories(); ?>

                <div class="card w-100">
                    <div class="card__card-header"><strong>mais lidos</strong></div>
                    <div class="card__card-body text-secondary">
                        <ul class="ml-ul">
                            <li>
                                <a href="#" class="ml-ul__ml2" target="_blank"><span><strong class="ml-ul__strong">1</strong></span>
                                    <span>Instalação e primeiros passos com <br>
                                        wordpress, um cms poderoso</span></a>
                            </li>
                            <li>
                                <a href="#" class="ml-ul__ml" target="_blank"><span><strong class="ml-ul__strong">2</strong></span>
                                    <span>Instalação e primeiros passos com <br>
                                        wordpress, um cms poderoso</span></a>
                            </li>
                            <li>
                                <a href="#" class="ml-ul__ml" target="_blank"><span><strong class="ml-ul__strong">3</strong></span>
                                    <span>Instalação e primeiros passos com <br>
                                        wordpress, um cms poderoso</span></a>
                            </li>
                            <li>
                                <a href="#" class="ml-ul__ml" target="_blank"><span><strong class="ml-ul__strong">4</strong></span>
                                    <span>Instalação e primeiros passos com <br>
                                        wordpress, um cms poderoso</span></a>
                            </li>
                            <li>
                                <a href="#" class="ml-ul__ml" target="_blank"><span><strong class="ml-ul__strong">5</strong></span>
                                    <span>Instalação e primeiros passos com <br>
                                        wordpress, um cms poderoso</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</main>

<?php get_footer(); ?>

<script>

var btnToggleSearch = document.getElementById("btnToggleSearch");


var input = document.getElementById('text')

function eraseText() {
    if(input.value != ''){
        input.value = ''
        console.log('rudrigu');
    } 
}

btnToggleSearch.addEventListener('click', () => {
	
    event.preventDefault();
    eraseText()
})

</script>