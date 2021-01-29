<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Comptatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>Gym Champs</title>
</head>
<body <?php body_class(); ?> >

--- hello from header-front.php ---
  
<header class="site-header">

  <div class="header-grid">
    <div class="navigation-bar">
      <div class="container">

        <div class="nav-container">
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() . "/img/logo.jpg"?>" alt="Site Logo">
            </a>
          </div><!-- .logo -->
  
          <?php 
            $args = array(
              'theme_location' => 'main-menu',
              'container' => 'nav',
              'container_class' => 'main-menu'
            );
            wp_nav_menu($args);
            ?> <!-- Links -->
        </div>

      </div> <!-- .container -->
    </div><!-- .nav bar -->
  </div><!-- .container -->
    
    <div class="tagline text-center">
      <h1><?php the_field('hero_tagline'); ?></h1>
      <p><?php the_field('hero_content'); ?></p>
      <p><?php the_field('hero_content_2'); ?></p>
      <button>Sign Up</button>
    </div>

</header>