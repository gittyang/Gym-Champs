

<?php get_header('front'); ?>

---hello from front-page.php ---

<?php while( have_posts() ): the_post(); ?>

  <!-- Welcome Section -->

  <section class="section section-welcome text-center">
    <div class="container">
      <h2><?php the_field('update_headline'); ?></h2>
      <p><?php the_field('update_description'); ?></p>
      <button class="button buttonWhiteBorder"><?php the_field('update_button'); ?></button>
    </div>
  </section>

    <!-- Area Section -->
    <section class="section-areas">
    <ul class="areas-container">
      <li class="area">
        <?php 
          $area1 = get_field('area_1'); 
          $image = wp_get_attachment_image_src( $area1['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area1['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area2 = get_field('area_2'); 
          $image = wp_get_attachment_image_src( $area2['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area2['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area3 = get_field('area_3'); 
          $image = wp_get_attachment_image_src( $area3['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area3['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area4 = get_field('area_4'); 
          $image = wp_get_attachment_image_src( $area4['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area4['area_name']; ?></p>
      </li>
    </ul>
  </section>

  <!-- Classes Section -->
  <section class="section-classes">
    <div class="container section">
      <h2 class="text-primary text-center">Our Classes</h2>

      <!-- This is an include from queries.php -->
      <?php gymchamps_classes_list(4); ?>

      <div class="button-container">
        <a class="button buttonRed" href="<?php echo get_permalink( get_page_by_title('Classes') ); ?>">
          View All Classes
        </a>
      </div>
    </div>
  </section>

  
  <!-- Instructors Section -->
  <section class="instructors">
    <div class="container section">
      <h2 class="text-center text-primary">Our Instructors</h2>
      <p class="text-center">Achieve your goals with the help of our expert instructors & personal trainers</p>

      <!-- This function is an "include" located at inc/queries.php in displays the instructors -->
      <?php gymchamps_instructors_list() ?>
    </div>
  </section>


  <!--  Testimonials Sections -->
  <section class="testimonials">
    <h2 class="text-center text-primary">Testimonials</h2>
    <div class="container-testimonials">
      
      <?php gymchamps_testimonials_list(); ?>
    
    </div>
  </section>


  <?php endwhile; ?>

<?php get_footer(); ?>