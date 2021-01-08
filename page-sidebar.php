<!-- This page contains the sidebar -->

<?php  

/*
* Template Name: Page with Sidebar
*/

get_header(); ?>

--- page-sidebar.php ---

<Main class="container page section with-sidebar">
  <div class="page-content">

  <!-- use this function to obtain the page template inside the specified folder-->
  <?php get_template_part('template-parts/page', 'loop'); ?>

  </div>

  <!-- look for and grab sidebar.php file -->
  <?php get_sidebar(); ?>

</Main>



<?php get_footer(); ?>