<!-- This page shows the sidebar -->

<aside class="sidebar">
  <?php
  
  // Located at functions.php - sidebar widget
  if(is_active_sidebar('sidebar') ) :
    dynamic_sidebar('sidebar');
  endif;
  
  ?>
</aside>