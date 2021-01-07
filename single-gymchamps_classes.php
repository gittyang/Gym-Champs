<!-- single post from classes requires "single-'name of post type'.php" -->
<!-- if page does not load -> settings -> permalinks -> save 2x -->

<!-- single-gymchamps_classes.php refers to an individual Classes page-->

<?php get_header(); ?>

<Main class="container page section with-sidebar">
  <div class="page-content">

  <?php get_template_part('template-parts/page', 'loop'); ?>

  </div>

  <?php get_sidebar(); ?>

</Main>

<?php get_footer(); ?>