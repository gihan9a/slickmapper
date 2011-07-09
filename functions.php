<?php
// Theme Version
define("THEME_VERSION", "1.0.0");

// Theme Constants
define("THEME_PREFIX", "slickmapper_");
define("THEME_NAME", "Slickmapper");


// Theme Location
define('THEME', get_bloginfo('template_url'), true);


// Add RSS Feed Links
add_theme_support( 'automatic-feed-links' );


// WordPress Post Thumbnail Support
if (function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // Main theme thumbnails
	add_image_size( 'icon-image', 32, 32, true ); // Small thumbnails
	add_image_size( 'full-image', 540, 300, true ); // Full Width thumbnails
}


// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
  'utility-nav' => __( 'Utility Menu', 'Utility Navigation' ),
  'primary-nav' => __( 'Primary Menu', 'Primary Navigation' )
) );


// Load Required Theme Scripts
function cs_theme_js() {
	if (is_admin()) return;
	// Header
	wp_enqueue_script('modernizr', THEME . '/js/libs/modernizr-1.6.min.js', 'jquery'); // Run modernizer in the head (HTML5 Helper)
	// Footer
	wp_deregister_script('jquery'); // Deregister WP version of jQuery
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', false, '1.4.2'); // Register Google jQuery
	wp_enqueue_script('jquery'); // Activate jQuery
	wp_enqueue_style('fancybox', THEME . '/js/libs/fancybox/jquery.fancybox-1.3.4.css');
	wp_enqueue_script('fancybox', THEME . '/js/libs/fancybox/jquery.fancybox-1.3.4.pack.js', 'jquery', '1', true);
	wp_enqueue_script('plugins', THEME . '/js/plugins.js', 'jquery', '1', true);
	wp_enqueue_script('script', THEME . '/js/script.js', 'jquery', '1', true);
}
add_action('init', 'cs_theme_js');



// The Admin Page
add_action('admin_menu', "cs_slickmapper_admin_init");


// Register Admin
function cs_slickmapper_admin_init()
{
	add_theme_page( THEME_NAME, "Theme Options", 'switch_themes', 'cs_slickmapper_admin_menu', 'cs_slickmapper_admin');
	
	// Include Custom Theme Options CSS
	wp_enqueue_style('default_options_css', THEME . '/options.css');
	
	// Custom Image Uploaders
	cs_add_img_upload_filter(THEME_PREFIX.'title_img', 'cs_handle_logo_upload');
	cs_add_img_upload_filter(THEME_PREFIX.'custom_login_logo', 'cs_handle_login_logo_upload');
	cs_add_img_upload_filter(THEME_PREFIX.'favicon', 'cs_handle_favicon_upload');
	cs_add_img_upload_filter(THEME_PREFIX.'appleicon', 'cs_handle_appleicon_upload');
}


// Image Upload Helper Function
function cs_add_img_upload_filter($option_name, $handler) {
  add_filter('pre_update_option_'.$option_name, $handler, 10, 2);
}


// Image Upload Handler Functions
function cs_handle_logo_upload($new_value, $old_value) {
  return cs_handle_img_upload(
    $new_value, 
    $old_value, 
    THEME_PREFIX.'logo_img_upload', 
    THEME_PREFIX.'delete_logo_img');
}

function cs_handle_login_logo_upload($new_value, $old_value) {
  return cs_handle_img_upload(
    $new_value, 
    $old_value, 
    THEME_PREFIX.'login_logo_img_upload', 
    THEME_PREFIX.'delete_login_logo_img');
}

function cs_handle_favicon_upload($new_value, $old_value) {
  return cs_handle_img_upload(
    $new_value, 
    $old_value, 
    THEME_PREFIX.'favicon_upload', 
    THEME_PREFIX.'delete_favicon');
}

function cs_handle_appleicon_upload($new_value, $old_value) {
  return cs_handle_img_upload(
    $new_value, 
    $old_value, 
    THEME_PREFIX.'appleicon_upload', 
    THEME_PREFIX.'delete_appleicon');
}


// Generic Image Upload Handler
function cs_handle_img_upload($new_value, $old_value, $file_index, $delete_field) {
  if ( isset($_POST[$delete_field]) && $_POST[$delete_field]=='true' )
    return '';

  if ( empty($_FILES) || !isset($_FILES[$file_index]) || 0==$_FILES[$file_index]['size'] )
    return $old_value;

  $overrides = array('test_form' => false);
  $file = wp_handle_upload($_FILES[$file_index], $overrides);

  if ( isset($file['error']) )
    wp_die( $file['error'] );

  $url = $file['url'];
  $type = $file['type'];
  $file = $file['file'];
  $filename = basename($file);

  // Construct The Object Array
  $object = array(
		  'post_title' => $filename,
		  'post_content' => $url,
		  'post_mime_type' => $type,
		  'guid' => $url
		  );

  // Save The Data
  $id = wp_insert_attachment($object, $file);

  // Add The Meta
  wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $file ) );

  do_action('wp_create_file_in_uploads', $file, $id); // For replication
  return esc_url($url);
}

function cs_slickmapper_admin() {

	$option_fields = array();

	if ( $_GET['updated'] ) echo '<div id="message" class="updated fade"><p>' . THEME_NAME . ' Theme Options Saved.</p></div>';
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/options/theme.css" type="text/css" media="all" />';
	
	// Accordion Script
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/js/libs/accordion/style.css" type="text/css" media="all" />';
	echo '<script src="'.get_bloginfo('template_url').'/js/libs/accordion/jquery.ui.js" type="text/javascript"></script>';
	echo '<script src="'.get_bloginfo('template_url').'/js/libs/accordion/jquery.accordion.js" type="text/javascript"></script>';
	
	// Color Picker Script
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/js/libs/colorpicker/style.css" type="text/css" media="all" />';
	echo '<script src="'.get_bloginfo('template_url').'/js/libs/colorpicker/jquery.colorpicker.js" type="text/javascript"></script>';
	echo '<script src="'.get_bloginfo('template_url').'/js/libs/colorpicker/jquery.eye.js" type="text/javascript"></script>';
	
	?>

	<div class="wrap">
		<div id="icon-options-general" class="icon32"><br/></div>
	
	    <h2><?php echo THEME_NAME; ?> Theme Options</h2>
	    <div class="metabox-holder">
	    	<form method="post" action="options.php" enctype="multipart/form-data">
				<?php wp_nonce_field('update-options'); ?>
	    
	        <div id="theme-options">
		        <div id="accordion" class="postbox-container">
							<?php
								include("options/theme/greetings.php");
								include("options/theme/logo.php");
								include("options/theme/icons.php");
								include("options/theme/theme-styles.php");
								include("options/theme/menus.php");
								include("options/theme/layout.php");
								include("options/theme/miscellaneous.php");
								include("options/theme/footer-text.php");
								include("options/theme/analytics.php");
								include("options/theme/save-the-web.php");
							?>
		        </div> <!-- postbox-container -->
	        </div> <!-- theme-options -->
	        
	        <input type="hidden" name="action" value="update" />
	        <input type="hidden" name="page_options" value="<?php echo implode(",", $option_fields); ?>" />
	        
	    	</form>
		
		</div> <!-- metabox-holder -->
	</div> <!-- wrap -->

<?php
}


// Custom Styles Function
add_action( 'parse_request', 'cs_custom_css' );
function cs_custom_css($wp) {
    if (
        !empty( $_GET['cs-custom-content'] )
        && $_GET['cs-custom-content'] == 'css'
    ) {
        header( 'Content-Type: text/css' );
        require dirname( __FILE__ ) . '/css/style-custom.php';
        exit;
    }
}


// Make a custom login logo and link
function cs_custom_login_logo() {
	$new_custom_login_logo = get_option(THEME_PREFIX . 'custom_login_logo'); 

	if ( $new_custom_login_logo ) {
  	echo '<style type="text/css">
  	    h1 a { background-image: url('.$new_custom_login_logo.') !important; }
  	</style>';
	}
}
function cs_wp_login_url() {
	echo bloginfo('url');
}
function cs_wp_login_title() {
	echo get_option('blogname');
}
add_action('login_head', 'cs_custom_login_logo');
add_filter('login_headerurl', 'cs_wp_login_url');
add_filter('login_headertitle', 'cs_wp_login_title');


// CSS3PIE Elements (BETA)
function cs_render_ie_pie() {
   echo '
<!--[if lte IE 8]>
<style type="text/css" media="screen">
   #primaryNav li a,
   #utilityNav li a {
      behavior: url('.trailingslashit(get_bloginfo('template_url')).'js/libs/PIE/PIE.php);
   }
</style>
<![endif]-->
';
}
add_action('wp_head', 'cs_render_ie_pie', 12);


?>