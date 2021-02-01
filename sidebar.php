<!-- This page shows the blogs sidebar -->

<aside class="sidebar">
<!-- --- hello from sidebar.php --- -->

  <?php
  
  // Located at functions.php - sidebar widget
  if(is_active_sidebar('sidebar') ) :
    dynamic_sidebar('sidebar');
  endif;
  
  ?>
</aside>