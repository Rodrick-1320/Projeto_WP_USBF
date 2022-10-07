<?php get_header(); ?>

<section class="separator-articles">
    <div class="separator-articles__container">
      <h2 class="separator-articles__h2">Artigos</h2>

        <form action="" class="separator-articles__form" >
          <div class="separator-articles__wrapper-input" id="wrapperInput">
            
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
              <button class="separator-articles__x" id="x" onclick="event.preventDefault(), eraseText()">
                <img src="../src/images/x.png" alt="">
              </button>
              <input class="separator-articles__search" id="text" type="text" placeholder="BUSCAR" required>
            </div>
            <button id="btnToggleSearch" class="separator-articles__lupinha" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" onchange="event.preventDefault(), eraseText()">
              <span><img src="../src/images/img1.png" alt=""></span>
            </button>
          </div>
        </form>
    </div>
  </section>

  <section class="main-content">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-12 col-lg-6">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
        <div class="bor">
            <a href="" target="_blank" class="btn btn-white btn-animate">
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
        
          <?php endwhile; ?>
        
          <?php else : ?>

            <p>SEM POSTS IRMÃO</p>

        <?php endif; ?>
  
          <section class="pags">
            <div class="pag">
              <button class="pag__ant disable" href="#" target="_blank">Anterior</button>
              <button class="pag__num-active" href="#" target="_blank">1</button>
              <button class="pag__num" href="#" target="_blank">2</button>
              <button class="pag__num" href="#" target="_blank">3</button>
              <button class="pag__prox btn-outline dark" href="#" target="_blank">Próxima</button>
            </div>
          </section>
        </div>
        <div class="col-lg-3">
          <section class="categorias">
            <div class="card w-100">
              <div class="card__card-header"><strong>categorias</strong></div>
              <div class="card__card-body text-secondary">
                <ul class="card__cat">
                  <li><a class="card__link" href="#" target="_blank">Blog</a></li>
                  <li><a class="card__link" href="#" target="_blank">Brasil</a></li>
                  <li><a class="card__link" href="#" target="_blank">Ceará</a></li>
                  <li><a class="card__link" href="#" target="_blank">Empreendedorismo</a></li>
                  <li><a class="card__link" href="#" target="_blank">Mundo</a></li>
                  <li><a class="card__link" href="#" target="_blank">Música</a></li>
                  <li><a class="card__link" href="#" target="_blank">Política</a></li>
                  <li><a class="card__link" href="#" target="_blank">Pop & arte</a></li>
                  <li><a class="card__link" href="#" target="_blank">Tecnologia</a></li>
                  <li><a class="card__link" href="#" target="_blank">Turismo e viagem</a></li>
                </ul>
              </div>
            </div>
          </section>
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