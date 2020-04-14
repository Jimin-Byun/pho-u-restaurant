<?php
function phou_stylesheets() {
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700' );
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' );
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Dancing+Script:400,700' );
  wp_enqueue_style( 'font_awesome',  get_template_directory_uri() .'/fonts/font-awesome/css/font-awesome.css' );
  wp_enqueue_style( 'phou_bootstrap_min',  get_template_directory_uri() .'/css/bootstrap.min.css', array(), null, 'all' );
  wp_enqueue_style( 'phou_main_style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'phou_stylesheets');

function home_menu($args) { 
  $post_type = $args['post_type'];
  $post_type_obj = get_post_type_object($post_type);
  // print_r($post_type_obj->labels);
  ?>
  
  <div class="col-xs-12 col-sm-6">
    <div class="menu-section">
      <h2 class="menu-section-title"><?php echo $post_type_obj->labels->singular_name; ?></h2>
      <hr>
      <?php 
        $menus = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => $post_type,
          'orderby' => 'menu_number',
          'order' => 'ASC'
        ));
        while($menus->have_posts()) {
          $menus->the_post();
        ?>
        <div class="menu-item">
          <div class="menu-item-name"><?php the_title(); ?></div>
          <div class="menu-item-price"><?php the_field('price'); ?></div>
          <div class="menu-item-description"><?php 
            $diets = get_field('diet');
            if($diets) {
              foreach($diets as $diet) {
                echo $diet;
              } 
            }
            ?></div>
        </div>
        <?php } ?>
      </div>
    </div>
  <?php 
}

function archive_menu($args) { 
  $post_type = $args['post_type'];
  $post_type_obj = get_post_type_object($post_type);
  // print_r($post_type_obj->labels);
  ?>
  
  <div class="col-xs-12 col-sm-6">
    <div class="menu-section">
      <h2 class="menu-section-title"><?php echo $post_type_obj->labels->singular_name; ?></h2>
      <hr>
      <?php 
        $menus = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => $post_type,
          'orderby' => 'menu_number',
          'order' => 'ASC'
        ));
        while($menus->have_posts()) {
          $menus->the_post();
        ?>
        <div class="menu-item">
          <div class="menu-item-name"><?php the_title(); ?></div>
          <div class="menu-item-price"><?php the_field('price'); ?></div>
          <div class="menu-item-description"><?php the_field('ingredients'); ?></div>
        </div>
        <?php } ?>
      </div>
    </div>
  <?php 
}