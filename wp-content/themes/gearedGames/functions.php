<?php 

function get_resources()
{
	// Load libraries
 	wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery  
	wp_register_script('jquery', get_template_directory_uri() . '/libraries/jquery-1.12.1.min.js', false);
    wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/libraries/bootstrap/js/bootstrap.js');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/libraries/bootstrap/css/bootstrap.css', array(), '1', 'all');

	// Load styles
	wp_enqueue_style('main', get_template_directory_uri() . '/styles/main.css', array(), '1', 'all');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/styles/fonts.css', array(), '1', 'all');
	wp_enqueue_style('home', get_template_directory_uri() . '/styles/homepage.css', array(), '1', 'all');
	wp_enqueue_style('game', get_template_directory_uri() . '/styles/gamepage.css', array(), '1', 'all');
	wp_enqueue_style('sidebar', get_template_directory_uri() . '/styles/sidebar.css', array(), '1', 'all');
	wp_enqueue_style('videos', get_template_directory_uri() . '/styles/videopage.css', array(), '1', 'all');
	
	if(wp_is_mobile())
		wp_enqueue_style('mobile', get_template_directory_uri() . '/styles/main_mobile.css', array(), '1', 'all');

	// Load scripts
	wp_enqueue_script('youtube', get_template_directory_uri() . '/scripts/youtubeLoader.js');
	wp_enqueue_script('events', get_template_directory_uri() . '/scripts/eventLoader.js');
	wp_enqueue_script('cards', get_template_directory_uri() . '/scripts/cardManager.js');
	wp_enqueue_script('parallax', get_template_directory_uri() . '/scripts/parallax.js');
	wp_enqueue_script('config', get_template_directory_uri() . '/scripts/config.js');
}

add_action('wp_enqueue_scripts', 'get_resources');

// Add featured image support
function geared_setup()
{
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'geared_setup');

function my_create_post_meta_box() {
	add_meta_box( 'my-meta-box', 'Summary', 'my_post_meta_box', 'post', 'normal', 'high' );
}

function my_post_meta_box( $object, $box ) { ?>
	<p>
		<label for="summary">Summary</label>
		<br />
		<textarea name="summary" id="summary" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'summary', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
<?php }

function my_save_post_meta_box( $post_id, $post ) {

	if ( !wp_verify_nonce( $_POST['my_meta_box_nonce'], plugin_basename( __FILE__ ) ) )
		return $post_id;

	if ( !current_user_can( 'edit_post', $post_id ) )
		return $post_id;

	$meta_value = get_post_meta( $post_id, 'summary', true );
	$new_meta_value = stripslashes( $_POST['summary'] );

	if ( $new_meta_value && '' == $meta_value )
		add_post_meta( $post_id, 'summary', $new_meta_value, true );

	elseif ( $new_meta_value != $meta_value )
		update_post_meta( $post_id, 'summary', $new_meta_value );

	elseif ( '' == $new_meta_value && $meta_value )
		delete_post_meta( $post_id, 'summary', $meta_value );
}

add_action( 'admin_menu', 'my_create_post_meta_box' );
add_action( 'save_post', 'my_save_post_meta_box', 10, 2 );
