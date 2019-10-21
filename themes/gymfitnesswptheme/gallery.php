<?php
/*
 * Template Name: Gallery
 */
get_header();?>

<main class="container page section">
    <?php while(have_posts() ): the_post(); ?>
    <h1 class="text-center text-primary"><?php the_title();?></h1>

        <?php the_content();?>
    <?php endwhile; ?>
</main>

<?php get_footer();?>
