<?php 

// Template name: teste2
get_header(); ?>

<?php
            $args = array( 
              'posts_per_page' => 3, 
              'post_type' => 'post'
            );
            $my_custom_query = new WP_Query($args);
        ?>

<?php if ($my_custom_query->have_posts()) : while ($my_custom_query->have_posts()) : $my_custom_query->the_post() ?>

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
<?php endwhile; ?>
<?= my_pagination(); ?>
<?php
endif; ?>

<?php get_footer(); ?>