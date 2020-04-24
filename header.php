<!DOCTYPE html>
<html>
  <head><?php wp_head(); ?></head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="#page-top"></a></div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('/#about'); ?>" class="page-scroll">About</a></li>
            <li><a href="<?php echo site_url('/#restaurant-menu'); ?>" class="page-scroll">Menu</a></li>
            <li><a href="<?php echo site_url('/#portfolio'); ?>" class="page-scroll">Gallery</a></li>
            <!-- <li><a href="#team" class="page-scroll">Our Chef</a></li> -->
            <li><a href="/#call-reservation" class="page-scroll">Contact</a></li>
            <!-- <li><img src="<?php bloginfo('template_url'); ?>/img/logo.png" width=100></li> -->
          </ul>
          <a href ="<?php echo site_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" width=100></a>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
    </nav>

