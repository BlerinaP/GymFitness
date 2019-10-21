<?php
/*
 * Template Name: Gallery
 */
get_header();?>

<main class="container page section">
    <?php while(have_posts() ): the_post(); ?>
    <h1 class="text-center text-primary"><?php the_title();?></h1>

       <?php
         $gallery = get_post_gallery(get_the_ID(), false );
         $gallery_images_ids = explode(',', $gallery['ids']);
        ?>

    <ul class="gallery-images">
        <?php
           foreach($gallery_images_ids as $id):
           $image = wp_get_attachment_image_src($id, 'square');?>
           <img src="<?php echo $image[0]; ?>"/>

         <?php endforeach; ?>
    </ul>

    <?php endwhile; ?>
</main>

<?php get_footer();?>
