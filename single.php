<?php
get_header();
?>

<h1>Details</h1>

<?php
// Start the Loop.
while (have_posts()) :
    the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

<?php endwhile; ?>

<?php
get_footer();
?>