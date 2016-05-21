<?php
/**
* Template Name: front page
*/
get_header();
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail')[0]

?>

<div class="container">
  <div class="row">
    <div class="col-6">
      <section class="banner">
        <img src="<?php echo $image; ?>">
      </section>
    </div>
    <div class="col-6 page-header">
      <h1>Darklight</h1>
      <p>I am an independant photographer, I live in Plymouth,
    and this city and the people in it are beatiful. Let Me Show You.</p>

      <nav>
        <ul class"page-header__links">
          <li>
            <a class="page-header__link-item" href="#">
              <i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a class="page-header__link-item" href="#">
              <i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a class="page-header__link-item" href="#">
              <i class="fa fa-instagram"></i></a>
          </li>
          <li>
            <a class="page-header__link-item" href="#">
              <i class="fa fa-envelope-o"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>





<?php get_footer(); ?>
