
<?php 
/*
* Template Name: Gallery
*/
get_header(); ?>

--- hello from gallery.php ---

<Main class="container page section">

  
  <?php while(have_posts()): the_post(); ?>
    <h1 class="text-center text-primary"><?php the_title(); ?></h1>

    <!-- Obtain image ids and organize -->
    <?php 
      $gallery = get_post_gallery( get_the_ID(), false );
      $gallery_image_ids = explode(',', $gallery['ids']);
    ?>

    <!-- Loop through images and display with specified size -->
    <ul class="gallery-images">
      <?php 
        $i = 0;
        foreach($gallery_image_ids as $id):
          $size = ($i === 3 || $i === 6) ? 'portrait' : 'square';
          $imageThumb = wp_get_attachment_image_src($id, $size);
          $image = wp_get_attachment_image_src($id, 'large');
          ?>

          <li>
            <a href="<?php echo $image[0]; ?>" data-lightbox="gallery">
              <img src="<?php echo $imageThumb[0] ?>" alt="">
            </a>
          </li>


      <?php $i++; endforeach; ?>
    </ul>
  <?php endwhile; ?>

</Main>


<?php get_footer(); ?>