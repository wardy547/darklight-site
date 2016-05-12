<?php
/**
* Template Name: front page
*/
get_header();

$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail')[0]

?>

<section class="banner">
  <img src="<?php echo $image; ?>">
</section>
<h1>hello</h1>



<?php get_footer(); ?>
