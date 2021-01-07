
<?php while(have_posts()): the_post(); ?>
  
  <h1 class="text-center text-primary"><?php the_title(); ?></h1>

  <?php 
    // Check if an image exist
    if( has_post_thumbnail() ) :
      // Display the image according to size (size located in functions.php)
      // + change class
      the_post_thumbnail('box', array('class' => 'featured-img') );
    else:
    
    endif;

    // Check for current post type
    if( get_post_type() === 'gymchamps_classes'):
      $start_time = get_field('start_time');
      $end_time = get_field('end_time');
  ?>

    <p class="content-class"> 
      <?php echo the_field('class_days') . " - " . $start_time . " to " .  $end_time ?> 
    </p>

  <?php endif; ?>

  <?php the_content(); ?>

<?php endwhile; ?>