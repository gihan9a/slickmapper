<?php get_header(); ?>
	
		<?php if ( has_nav_menu( 'primary-nav' ) ) : ?>
  	  <?php wp_nav_menu( array('theme_location' => 'primary-nav', 'container' => 'nav', 'container_id' => 'primary-nav', 'container_class' => 'custom-menu', 'menu_id' => 'primaryNav', 'sort_column' => 'menu_order' ) ); ?>  	
  	<?php else : ?>
  	<nav id="primary-nav">
		  <ul id="primaryNav" class="col<?php echo get_option(THEME_PREFIX . "columns"); ?>">
		  	<li id="home"><a href="<?php bloginfo('home'); ?>">Home</a></li>
		    <?php wp_list_pages('title_li='); ?>
		  </ul>
		</nav>
		<?php endif; ?>
	

<?php get_footer(); ?>