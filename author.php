<!-- Author Page -->

<?php get_header(); ?>

<!-- <p>hello from author.php</p> -->

<main class="container page section">

  <?php 
  
  $author = get_queried_object(); 

  // -- How to look inside $author object
  // echo "<pre>";
  // var_dump($author);
  // echo "</pre>";

  ?>

  <!-- obtain display name inside $author object -->
  <h2 class="text-center text-primary">Author: <?php echo $author->data->display_name; ?></h2>
  <p class="text-center"><?php echo get_the_author_meta('description', $author->data->ID); ?></p>

  <?php get_template_part('template-parts/blog', 'loop'); ?>
  
</main>

<?php get_footer(); ?>

