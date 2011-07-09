	</div>
	<!-- #sitemap -->

<section id="footer">
		
	<?php if ( get_option(THEME_PREFIX . "copy_text") ) { ?>
	  <h3>&copy; Copyright <?php echo date("Y"); ?> <?php echo get_option(THEME_PREFIX . "copy_text"); ?> - All Rights Reserved</h3>
	<?php } ?>
	
	<?php if ( get_option(THEME_PREFIX . "footer_text") ) : ?>
	  <p><?php echo get_option(THEME_PREFIX . "footer_text"); ?></p>
	<?php else : ?>
	  <p>The above sitemap was created from an HTML unordered list with <a href="http://astuteo.com/slickmap">SlickMap CSS</a>, powered by <a href="http://wordpress.org">WordPress</a>. Theme built by <a href="http://celtic7.com">CELTIC7</a>.</p>
	<?php endif; ?>
		
</section>
<!-- #footer -->

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

<?php wp_footer(); ?>


<?php if ( get_option(THEME_PREFIX . "no_ie") ) : ?>
<!--[if IE 6]>
<script type="text/javascript"> 
  /*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></"+"script>"); var __noconflict = true; } 
  var IE6UPDATE_OPTIONS = {
  	icons_path: "http://static.ie6update.com/hosted/ie6update/images/"
  }
</script>
<script type="text/javascript" src="http://static.ie6update.com/hosted/ie6update/ie6update.js"></script>
<![endif]-->
<?php endif; ?>


<?php if ( get_option(THEME_PREFIX . "pushup") ) : ?>
<!-- Pushup The Web -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/libs/pushup/css/pushup.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/libs/pushup/pushup.js"></script>
<?php endif; ?>


<?php echo get_option(THEME_PREFIX . "analytics_code"); ?>
	
	
</body>
</html>