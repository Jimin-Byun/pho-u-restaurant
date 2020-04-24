<?php
function phou_stylesheets() {
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700' );
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' );
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Dancing+Script:400,700' );
  wp_enqueue_style( 'font_awesome',  get_template_directory_uri() .'/fonts/font-awesome/css/font-awesome.css' );
  wp_enqueue_style( 'phou_bootstrap_min',  get_template_directory_uri() .'/css/bootstrap.min.css', array(), null, 'all' );
  wp_enqueue_style( 'nivo1', get_template_directory_uri() ."/css/nivo-lightbox/nivo-lightbox.css" );
  wp_enqueue_style( 'nivo1', get_template_directory_uri() ."/css/nivo-lightbox/default.css" );
  wp_enqueue_style( 'phou_main_style', get_stylesheet_uri() );
  wp_enqueue_script( 'script1', get_template_directory_uri() ."/js/jquery.1.11.1.js" );
  wp_enqueue_script( 'script2', get_template_directory_uri() ."/js/bootstrap.js" );
  wp_enqueue_script( 'script3', get_template_directory_uri() ."/js/SmoothScroll.js" );
  wp_enqueue_script( 'script4', get_template_directory_uri() ."/js/nivo-lightbox.js" );
  wp_enqueue_script( 'script5', get_template_directory_uri() ."/js/jquery.isotope.js" );
  wp_enqueue_script( 'script6', get_template_directory_uri() ."/js/jqBootstrapValidation.js" );
  wp_enqueue_script( 'script7', get_template_directory_uri() ."/js/contact_me.js" );
  wp_enqueue_script( 'script8', get_template_directory_uri() ."/js/main.js" );
}
add_action('wp_enqueue_scripts', 'phou_stylesheets');

function phou_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'phou_features');

function choose_option() { 
  if (get_field('amount')) {
    echo '<div>' . get_field('amount') . '</div>';
  }
  if (get_field('choose_meat')) {
    $meats = get_field('choose_meat');
    echo '<div><b>Choose</b> ';
    if($meats) {
      foreach($meats as $meat) {
        if ($meat === end($meats)) { echo $meat . '</div>'; }
        else { echo $meat . " or "; }
      } 
    }
  }
  if (get_field('choose_noodle')) {
    $noodles = get_field('choose_noodle');
    echo '<div><b>Choose</b> ';
    if($noodles) {
      foreach($noodles as $noodle) {
        if ($noodle === end($noodles)) { echo $noodle . '</div>'; }
        else { echo $noodle . " or "; }
      } 
    }
  }
  if (get_field('choose_pho')) {
    $phos = get_field('choose_pho');
    echo '<div><b>Choose</b> ';
    if($phos) {
      foreach($phos as $pho) {
        if ($pho === end($phos)) { echo $pho . '</div>'; }
        else { echo $pho . " or "; }
      } 
    }
  }
  if (get_field('choose_appetizer')) {
    $appetizers = get_field('choose_appetizer');
    echo '<div><b>Choose</b> ';
    if($appetizers) {
      foreach($appetizers as $appetizer) {
        if ($appetizer === end($appetizers)) { echo $appetizer . '</div>'; }
        else { echo $appetizer . " or "; }
      } 
    }
  }
  if (get_field('choose_tofu')) {
    $tofus = get_field('choose_tofu');
    echo '<div><b>Choose</b> ';
    if($tofus) {
      foreach($tofus as $tofu) {
        if ($tofu === end($tofus)) { echo $tofu . '</div>'; }
        else { echo $tofu . " or "; }
      } 
    }
  }

  if (get_field('choose_spicy')) {
    $spicys = get_field('choose_spicy');
    echo '<div><b>Choose</b> ';
    if($spicys) {
      foreach($spicys as $spicy) {
        if ($spicy === end($spicys)) { echo $spicy . ' spicy</div>'; }
        else { echo $spicy . " or "; }
      } 
    }
  }

  if (get_field('togo')) {
    $togos = get_field('togo');
    if($togos) {
      foreach($togos as $togo) {
        echo '<div>' . $togo . '</div>';
      } 
    }
  }


}

function home_menu($args) {
  $post_type = $args['post_type'];
  $post_type_obj = get_post_type_object($post_type);
  // if ($post_type_obj) {
  //   print_r($post_type_obj);
  // } else {
  //   print_r('there isnt object');
  // }
  ?>
  <div class="col-xs-12 col-sm-12" id="<?php 
    if ($post_type == 'appetizer') { echo 'appetizer'; }
    elseif ($post_type == 'vermicelli' or $post_type == 'pho') { echo 'vietnamese'; }
    elseif ($post_type == 'seafoodNoodle' or $post_type == 'koreanSpecial' or $post_type == 'koreanRice') { echo 'korean'; }
    elseif ($post_type == 'lunchBox' or $post_type == 'specialBox') { echo 'box'; } ?>">
    <div class="menu-section">
      <h2 class="menu-section-title">
      <a href="<?php 
          // echo get_post_type_archive_link($post_type);
          echo site_url('/' . $post_type);
         ?>"><?php 
        // echo $post_type_obj->labels->singular_name;
        echo $post_type;
        ?></a></h2>
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
        <div class="row">
          <div class="menu-item"><a href="<?php echo site_url('/' . $post_type); ?>">
            <div class="menu-item-name"><b><?php the_field('menu_number'); ?> </b><?php the_title(); ?></div>
            <div class="menu-item-price"><?php the_field('price'); ?></div>
            <div class="menu-item-description"><?php 
              $diets = get_field('diet');
              if($diets) {
                foreach($diets as $diet) {
                  if ($diet === end($diets)) { echo $diet; }
                  else { echo $diet . ", "; }
                }
              }
              ?>
            </div>
          </div></a>
        </div>
        <?php wp_reset_postdata(); } ?>
      </div>
    </div>
  <?php 
}

function archive_menu($args) { 
  $post_type = $args['post_type'];
  $post_type_obj = get_post_type_object($post_type);
  // print_r($post_type_obj->labels);
  ?>
  
  <div class="col-xs-12 col-sm-12">
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
        <a href="<?php the_permalink(); ?>">
        <div class="menu-item">
          <div class="menu-item-name"><b><?php the_field('menu_number'); ?> </b><?php the_title(); ?></div>
          <div class="menu-item-price"><?php the_field('price'); ?></div>
          <div class="menu-item-description"><?php the_field('ingredients'); ?></div>
        </div>
        <?php 
          choose_option();
        } ?>
        </a>
      </div>
    </div>
  <?php 
}

function gallery() { 
  $food_post_types = array(
    'appetizer',
    'vermicelli',
    'pho',
    'seafoodNoodle',
    'koreanSpecial',
    'koreanRice',
    'lunchBox',
    'specialBox',
  );
  foreach ($food_post_types as $type) {
    $menus = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => $type,
      'orderby' => 'menu_number',
      'order' => 'ASC'
    ));
    while($menus->have_posts()) {
      $menus->the_post();
      if (has_post_thumbnail()) {
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );

        ?>
        <div class="col-sm-6 col-md-4 col-lg-4 <?php 
          if ($type == 'appetizer') { echo 'appetizer'; }
          elseif ($type == 'vermicelli' or $type == 'pho') { echo 'vietnamese'; }
          elseif ($type == 'seafoodNoodle' or $type == 'koreanSpecial' or $type == 'koreanRice') { echo 'korean'; }
          elseif ($type == 'lunchBox' or $type == 'specialBox') { echo 'box'; } ?>
          ">
          <div class="portfolio-item">
            <div class="hover-bg"><a href="<?php the_permalink(); ?>" title="<?php the_field('menu_number'); ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4><?php the_title(); ?></h4>
              </div>
              <img src="<?php echo $thumbnail[0]; ?>" class="img-responsive" alt="Project Title"></a>
            </div>
          </div>
        </div>
        <?php
      }
    }
  }
}
?>