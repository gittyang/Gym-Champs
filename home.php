<!-- Blog Page -->

<?php get_header(); ?>
--- hello from home.php ---

<main class="section section-blog">
  <div class="container blog-container">
    <?php get_template_part('template-parts/blog', 'loop'); ?>
  </div>
</main>

<?php get_footer(); ?>
