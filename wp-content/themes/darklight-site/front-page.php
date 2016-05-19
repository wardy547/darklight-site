<?php
/**
* Template Name: front page
*/
get_header();
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail')[0]

?>
<div class="body">
<div class= "container">
  <div class= "row">
    <div class= "col-6">
<section class="banner">
  <img src="<?php echo $image; ?>">
</section>
</div>
<div class= "col-6 head">
  <h1>Darklight</h1>
  <br>
  <p>Not Your Usual Photography Company</p>
  <br>
  <nav>
    <ul class"header__links">
      <li>
        <a class="header__link-item" href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a class="header__link-item" href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a class="header__link-item" href="#"><i class="fa fa-instagram"></i></a>
        </li>
        <li>
          <a class="header__link-item" href="#"><i class="fa fa-envelope-o"></i></a>
        </li>
      </ul>
    </nav>
</div>
</div>
</div>
</div>





<?php get_footer(); ?>
