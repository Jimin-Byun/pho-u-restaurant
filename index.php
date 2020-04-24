<?php get_header(); ?>

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Pho U</h1>
            <p>Vietnamese & Korean Cuisine</p>
            <a href="/#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="<?php bloginfo('template_url'); ?>/img/about.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Our Restaurant</h2>
          <hr>
          <p>We would like to welcome you to Pho U. We not only carefully select ingredients for all foods, we also boast the best taste through our demanding cooking process, using all natural ingredients. For example, our beef broth simmers for two days to achieve its mellow, rich and textured taste. Our kitchen is kept at the highest level of cleanliness.</p>
          <h3>Our Specialty</h3>
          <p>The Vietnamese community in Victoria has praised Pho U’s authentic flavour, recognizing it as a true rice noodle restaurant. We also serve popular Korean and Korean Chinese cuisines, with a home-cooked value.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
      <p>With taste, quantity and reasonable prices, we will satisfy your taste buds with great food.</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="categories">
        <ul>
          <li>
            <ol class="type">
              <li><a href="#appetizer">Appetizer</a></li>
              <li><a href="#vietnamese">Vietnamese</a></li>
              <li><a href="#korean">Korean</a></li>
              <li><a href="#box">Lunch & Special Box</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
      <?php
      home_menu(array(
        'post_type' => 'appetizer'
      )); ?>
      <?php
      home_menu(array(
        'post_type' => 'vermicelli'
      )); ?>
    <?php
      home_menu(array(
        'post_type' => 'pho'
      )); ?>
      <?php
      home_menu(array(
        'post_type' => 'seafoodNoodle'
      )); ?>       
    <?php
      home_menu(array(
        'post_type' => 'koreanSpecial'
      )); ?>
      <?php
      home_menu(array(
        'post_type' => 'koreanRice'
      )); ?>          
    <?php
      home_menu(array(
        'post_type' => 'lunchBox'
      )); ?>
      <?php
      home_menu(array(
        'post_type' => 'specialBox'
      )); ?>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Gallery</h2>
      <hr>
      <p>Every satisfied customer puts a smile on our faces/makes our day complete.</p>
    </div>
  </div>
  <div class="container">
    <?php get_template_part('template_parts/category', 'excerpt'); ?>
    <div class="row">
      <div class="portfolio-items">
      <?php gallery() ?>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<!--
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Meet Our Chefs</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
      </div>
      <div id="row">
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/01.jpg" alt="..."></div>
            <div class="caption">
              <h3>Mike Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/02.jpg" alt="..."></div>
            <div class="caption">
              <h3>사장님</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/03.jpg" alt="..."></div>
            <div class="caption">
              <h3>사장님</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 -->

<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>Want to make a reservation? Call <strong>1-778-433-4646</strong></h2>
  </div>
</div>

<!-- Contact Section -->
<!-- <div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact Form</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
    </div>
  </div>
</div>  -->
<?php get_footer(); ?>