<?php get_header(); ?>

<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
      <p><?php echo get_queried_object()->labels->all_items ?></p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php
      // print_r(get_queried_object()->name);
      archive_menu(array(
        'post_type' => get_queried_object()->name
      )); ?>
    </div>
</div>

<?php get_footer(); ?>