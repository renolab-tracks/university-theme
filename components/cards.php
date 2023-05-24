<?php

$the_query = new WP_Query([
    'post_type' => 'news',

    // 'posts_per_page' => 2,
    'tag' => 'humor',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'fun',
        )
    )
]);

?>

<?php if ($the_query->have_posts()) : ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php echo __('News') ?> </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top" alt="<?php the_title() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>


                            <a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

    </div>
<?php else : ?>
    Sorry No Posts Found
<?php endif; ?>