<!-- Navigation https://github.com/wp-bootstrap/wp-bootstrap-navwalker -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="<?php echo get_stylesheet_directory_uri();?>/img/marchfarm-logo.svg" alt="march farm"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="icon fa fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <?php
wp_nav_menu( array(
  'menu'              => 'Main Menu',
  'theme_location'    => 'main-menu',
  'depth'             => 3,
  'container'         => '',
  'container_class'   => '',
  'container_id'      => 'bs-example-navbar-collapse-1',
  'menu_class'        => 'navbar-nav justify-content-center',
  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
  'walker'            => new wp_bootstrap_navwalker())
 );
    ?>
      <ul class="navbar-nav social-menu">
        <li class="social"><a class="nav-link" href="#"> <i class="fa fa-fw fa-vimeo"></i></a></li>
        <li class="social"><a class="nav-link" href="#"> <i class="fa fa-fw fa-instagram"></i></a></li>
        <li class="social"><a class="nav-link" href="#"> <i class="fa fa-fw fa-twitter"></i></a></li>
        <li class="social"><a class="nav-link" href="#"> <i class="fa fa-fw fa-facebook"></i></a></li>
      </ul>
    </div>
  </div>
</nav>