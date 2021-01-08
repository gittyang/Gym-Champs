<?php 

// Leaving comments before this php block = image bug
// Make sure to activate the plugin in WP admin

// --- This widget shows the classes in the sidebar ---

/*
  Plugin Name: Gym Champs - Widgets
  Plugin URI: 
  Description: Adds a Custom Widget to the WordPress Widgets Panel
  Version: 1.0
  Author:  Tou Toua Yang
  Author URI:
  Text Domain: Gym 
*/

if(!defined('ABSPATH')) die();

/**
 * Adds Foo_Widget widget.
 */
class GymChamps_Classes_Widget extends WP_Widget {


	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
      'gymchamps_classes', // Base ID
			esc_html__( 'Gym Champs - Classes List', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Displays different classes in the sidebar widget', 'text_domain' ), ) // Args
		);
	}


	/**
	 * --- Front-end display of widget. ---
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
    // This variable is located at gymchamps_widget functions inside of functions.php
    // This variable contains the html code for a widget div
    echo $args['before_widget']; 

    $quantity = $instance['quantity'];
    ?>


    --- hello from gymchamps_widgets.php ---

    <h2 class="text-primary text-center classes-header">
      <?php echo esc_html($instance['title']); ?>
    </h2>
    <ul class="sidebar-classes-list">
      <?php 
        $args = array(
          // Obtain info from gymchamps_classes in gymchamps_post_types.php
          // if query blog = 'post', if query page = 'page'
          'post_type' => 'gymchamps_classes',
          'posts_per_page' => $quantity,
        );

        $classes = new WP_Query($args);
        while($classes->have_posts()): $classes->the_post();
      ?>

      <li class="sidebar-class">
        <div class="sidebar-widget-image">
          <?php 
            // image size located in WP settings
            the_post_thumbnail('thumbnail');
          ?>
        </div>

        <div class="class-content">
          <a href="<?php the_permalink(); ?>">
            <h3 class="text-primary"><?php the_title(); ?></h3>
          </a>
          <?php 
          $start_time = get_field('start_time');
          $end_time = get_field('end_time');
          ?>

        <p><?php the_field('class_days'); echo " - " . $start_time . " to " .  $end_time ?></p>
        </div>
      </li>

      <!-- Due to custom WP query, reset to standard query  -->
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>

    <!-- This variable is located at gymchamps_widget functions inside of functions.php -->
    <!-- This variable contains the html code for a widget div -->
    <?php
		echo $args['after_widget'];
	}


	/**
	 * --- Back-end widget form. ---
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */


  // Wordpress Interface Display for Gym Champs - Classes List
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		$quantity = ! empty( $instance['quantity'] ) ? $instance['quantity'] : esc_html__( '1', 'text_domain' );
		?>

    <!-- Title & Input Field -->
		<p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
        <?php esc_attr_e( 'Title:', 'text_domain' ); ?>
      </label> 

      <input 
        class="widefat" 
        id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
        type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

    <!-- Title & Quantity -->
		<p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'quantity' ) ); ?>">
        <?php esc_attr_e( 'Amount of classes to display:', 'text_domain' ); ?>
      </label> 

      <input 
        class="widefat" 
        id="<?php echo esc_attr( $this->get_field_id( 'quantity' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'quantity' ) ); ?>" 
        type="number" value="<?php echo esc_attr( $quantity ); ?>"
        min="1"
        >
		</p>
		<?php 
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['quantity'] = ( ! empty( $new_instance['quantity'] ) ) ? sanitize_text_field( $new_instance['quantity'] ) : '';

		return $instance;
	}

} // class Foo_Widget

// register Foo_Widget widget
function gymchamps_classes_widget() {
  register_widget( 'GymChamps_Classes_Widget' );
}
add_action( 'widgets_init', 'gymchamps_classes_widget' );


?>