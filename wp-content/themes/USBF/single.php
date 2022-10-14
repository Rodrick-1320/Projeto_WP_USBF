<?php get_header(); ?>

<section class="separator-articles">
    <div class="separator-articles__container">
        <h2 class="separator-articles__h2">Artigos</h2>

        <form action="" class="separator-articles__form">
            <div class="separator-articles__wrapper-input" id="wrapperInput">

                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                    <button class="separator-articles__x" id="x" onclick="event.preventDefault(), eraseText()">
                        <img src="<?= get_template_directory_uri(); ?>/src/images/x.png" alt="">
                    </button>
                    <input class="separator-articles__search" id="text" type="text" placeholder="BUSCAR" required>
                </div>
                <button id="btnToggleSearch" class="separator-articles__lupinha" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" onchange="event.preventDefault(), eraseText()">
                    <span><img src="<?= get_template_directory_uri(); ?>/src/images/img1.png" alt=""></span>
                </button>
            </div>
        </form>
    </div>
</section>

<section class="main-content">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">




                <div class="wrapper-content col-12 col-lg-12">
                    <small class="posts-list__tag">wordpress</small>
                    <h3 class="posts-list__title"><?php the_title(); ?></h3>
                    <p class="posts-list__content"><?php the_content(); ?></p>
                    <time class="posts-list__date"><?php the_time('j F \d\e Y') ?></time>
                </div>
                
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