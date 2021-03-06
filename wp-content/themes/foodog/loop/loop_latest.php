<?php

if (have_posts()) :

    $arguments = array(
        'post_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
    );
    $query = new WP_Query($arguments);
?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>

        <div class="custom-card row">
            <a href="<?= get_permalink() ?>" class="col-6">
                <?php the_post_thumbnail('full', ['class' => 'img-fluid mb-4', 'style' => 'height:auto']) ?>
            </a>
            <div class="col-6">
                <h5 class="card-title"><?= the_title() ?></h5>
                <?php the_category(' '); ?>
                <p><?= the_content('') ?></p>
            </div>
        </div>


    <?php endwhile;
else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>