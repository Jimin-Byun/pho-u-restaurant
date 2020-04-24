<?php 

  get_header(); 
  while(have_posts()) {
    the_post();
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );
    $post_type_obj = get_post_type_object(get_post_type());
  ?>
  <div id="restaurant-menu">
    <div class="section-title text-center center">
      <div class="overlay">
        <h2>Menu</h2>
        <hr>
        <p><?php echo $post_type_obj->labels->singular_name; ?></p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
        <div class="menu-section">
          <h2 class="menu-section-title"><?php echo the_title(); ?></h2>
          <hr>
            <div class="menu-item">
              <div class="menu-item-name"><b><?php the_field('menu_number'); ?> </b><?php the_title(); ?></div>
              <div class="menu-item-price"><?php the_field('price'); ?></div>
              <div class="menu-item-description"><?php the_field('ingredients'); ?></div>
            </div>
            <?php 
              choose_option();
            } ?>
          </div>
        </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="portfolio-item">
              <div class="hover-bg"><a href="<?php echo $thumbnail[0]; ?>" title="the_field('menu_number')" data-lightbox-gallery="gallery1">
                <div class="hover-text">
                  <h4><?php the_title(); ?></h4>
                </div>
                <img 
                  src="
                    <?php 
                      if ($thumbnail[0]) {echo $thumbnail[0];}
                      else {echo bloginfo('template_url') . '/img/single.jpg';} 
                    ?>" 
                  class="img-responsive" alt="Project Title"></a>
              </div>
            </div>
      </div>
    </div>
  </div>
<?php
  get_footer();
?>