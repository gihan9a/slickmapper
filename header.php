<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- A CELTIC7 design by Luke McDonald (http://lukemcdonald.com + http://celtic7.com) - Proudly powered by WordPress (http://wordpress.org) -->

<head profile="http://gmpg.org/xfn/11">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- <?php echo "Theme Version: " . THEME_PREFIX . THEME_VERSION; ?> -->
	
	<!-- Titles -->
	<title><?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?><?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?><?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?><?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?><?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?><?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?><?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?><?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?></title>
	
	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<meta name="description" content="<?php the_excerpt_rss(); ?>" />
	<?php endwhile; endif; elseif(is_home()) : ?>
		<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php endif; ?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

	<!-- Required Theme Styles -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=1" type="text/css" />
	<!--[if lt IE 9 ]> <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-browsers.css?v=1" /> <![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-custom.css?v=1" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/?cs-custom-content=css" /><!-- custom theme styles if there are any -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css?v=1" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/handheld.css?v=1" media="handheld" />
	
	<!-- Pingback -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Custom Favicon -->
	<?php $favicon_link = get_option(THEME_PREFIX . 'favicon'); if ( !$favicon_link ) $favicon_link = get_bloginfo('template_url') . '/images/favicon.ico'; ?>
	<link rel="shortcut icon" href="<?php echo $favicon_link; ?>" type="image/x-icon" />
	
	<!-- Custom Apple-touch-icon -->
	<?php $appleicon_link = get_option(THEME_PREFIX . 'appleicon'); if ( !$appleicon_link ) $appleicon_link = get_bloginfo('template_url') . '/images/apple-touch-icon.png'; ?>
  <link rel="apple-touch-icon" href="<?php echo $appleicon_link; ?>">
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
	
</head>

<?php 
// Check to see if (flush() function is enabled)
// This has been know to speed up WP but also not play nice with W3 Total Cache
if ( get_option( THEME_PREFIX . 'enable_flush' ) ) :
	$wpdb->flush();
	echo '<!-- flush() enabled. Disable in Theme Options, Miscellaneous section -->';
endif;
?>

<body id="top" <?php body_class(); ?> >

	<div class="sitemap">
	
  	<header id="header">
  		
  		<div id="title-area">
  	  	<?php if ( get_option(THEME_PREFIX . "title_txt") ) : ?>
  	    <h1 id="title"><a class="fade" href="<?php echo get_option('home'); ?>/" title="Home" ><?php echo get_option(THEME_PREFIX . "title_txt"); ?></a></h1>
				<?php else : ?>
  	    <h1><a class="fade png_bg" href="<?php echo get_option('home'); ?>/" title="Home" >
  	    	<img src="<?php echo ($logo = get_option(THEME_PREFIX . 'title_img')) ? $logo : get_bloginfo("template_url") . "/images/logo.png"; ?>" alt="<?php bloginfo('name'); ?>" />
  	    </a></h1>
				<?php endif; ?>
				
				<?php if ( get_option(THEME_PREFIX . "title_desc") ) : ?>
  			<h2 id="description"><?php bloginfo('description'); ?></h2>
				<?php else : ?>
  			<h2 id="description" class="hidden" ><?php bloginfo('description'); ?></h2>
				<?php endif; ?>
  		</div>
  		<!-- #title-area -->
  	</header>
		
  	<?php if ( has_nav_menu( 'utility-nav' ) ) : ?>
  	  <?php wp_nav_menu( array('theme_location' => 'utility-nav', 'container' => 'nav', 'container_id' => 'utility-nav', 'menu_id' => 'utilityNav', 'sort_column' => 'menu_order' ) ); ?>  	
  	<?php else : ?>
  	<nav id="utility-nav">
		  <ul id="utilityNav">
		    <li>
		    	<?php
					if ( is_user_logged_in() ) {
						global $current_user;
						get_currentuserinfo();
						echo '<a href="/wp-admin/">Welcome, ' . $current_user->user_login . '</a>';
					} else {
						echo '<a class="login" href="' . wp_login_url( get_bloginfo('url') ) . '" title="Login">Login</a>';
					};
					?>
				</li>
		  </ul>
		</nav>
		<?php endif; ?>
		
		
