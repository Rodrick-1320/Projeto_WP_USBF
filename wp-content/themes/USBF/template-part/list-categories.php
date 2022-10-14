<?php $categories = $args['categories']; ?>
<section class="categorias">
    <div class="card w-100">
        <div class="card__card-header"><strong>categorias</strong></div>
        <div class="card__card-body text-secondary">
            <ul class="card__cat">
                <?php foreach ($categories as $category) : ?>
                    <li><a class="card__link" href="<?= esc_url(get_category_link($category->term_id)); ?>" target="_blank"><?= $category->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>