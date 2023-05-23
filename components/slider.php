<?php

$the_query = new WP_Query(['post_type' => 'post']);
?>

<?php if ($the_query->have_posts()) : ?>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <?php
            $loop_index = 0;
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="carousel-item <?= $loop_index == 0 ? 'active' : '' ?>">
                    <img src="<?php echo  get_the_post_thumbnail_url() ?>" class="d-block w-100" alt="<?php the_title(); ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
                <?php $loop_index++; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php else : ?>
    Sorry No Posts Found
<?php endif; ?>