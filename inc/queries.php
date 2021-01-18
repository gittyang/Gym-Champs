
<?php 

  // Leaving a comment before this php code = media library bug

  // This file contains the Front End code to display the post type "Classes"
  // which the information is created in the WP admin panel
  // The Back End code where this informaiton is queried from 
  // is located in gymchamps_post_types.php located in the plugins folder


// This section contains the Front End code to display the "Gym Classes"

// Needs $number parameter to display 4 posts in front-page.php, 
// Include -1 to remove error and instead display all
function gymchamps_classes_list($number = -1) { ?>
  --- hello from queries.php ---

   <!-- gymchamps_classes_list function displays all gym classes -->
  <ul class="classes-list">
  <?php 
      $args = array(
        'post_type' => 'gymchamps_classes', // located in gymchamps_post_types.php in Plugins folder
        'posts_per_page' => $number
      );

      // Use WP_Query and append the results into $classes
      $classes = new WP_Query($args);

      // Loop through all posts
      while($classes->have_posts()): $classes->the_post();
    ?>

    <li class="gym-class card gradient">
      <?php the_post_thumbnail('box'); ?>

      <div class="card-content">
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a>

        <?php 
          $start_time = get_field('start_time');
          $end_time = get_field('end_time');
        ?>

        <p> <?php the_field('class_days'); echo " - " . $start_time . " to " .  $end_time ?> </p>
      </div>

    </li>

    <!-- Due to custom WP query, reset to standard query  -->
    <?php endwhile; wp_reset_postdata(); ?>
  </ul>


<?php } ?>

<!-- Instructors Section -->

<?php
// This file contains the Front End code to display the "Instructors"
// The Back End code where the Post Type "Instructors" Plugin was created
// Is located at gym_post_types.php in the Plugins folder after the "Classes" section

function gymchamps_instructors_list() { ?> 
  --- hello from queries.php ---
  <ul class="instructor-list">
    <?php 
      // method for querying the data from "Instructors" post type
      $args = array(
        'post_type' => 'instructors', // instructors name located at gym_post_type.php
        'posts_per_page' => 20
      );
      $instructors = new WP_Query($args);

      while( $instructors->have_posts() ): $instructors->the_post(); ?>

      <li class="instructor">
        <?php the_post_thumbnail('mediumSize'); ?>
        <div class="content text-center">
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
          <div class="specialty">
            <?php 
              $specialty = get_field('specialty');

              foreach($specialty as $s):?> 
              
              <span class="tag"><?php echo $s; ?></span>

            <?php endforeach; ?>
          </div>
        </div>
      </li>

    <?php endwhile; wp_reset_postdata(); ?>
  </ul>

<?php }
?>




