<?php
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            // Start the Loop.
            while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>