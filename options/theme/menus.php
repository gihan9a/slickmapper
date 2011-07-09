<?php
	$option_fields[] = $enable_utility_menu = THEME_PREFIX . "enable_utility_menu";
?>
<div class="postbox">

	<h3>Navigation Menus</h3>
    
	<div class="inside">
		<div class="cs theme-options">
		
			<p class="intro">Slickmapper by default populates menu with pages. However, the option to use WordPress's built in <a href="<?php get_bloginfo(); ?>/wp-admin/nav-menus.php" title="">menu options</a> to customize the default menu for this theme is enabled.</p>
			
    	<div class="inner">
    		<h4>Utility Navigation</h4>
    		<div class="table">
					<p>
					  <label for="<?php echo $enable_utility_menu; ?>">
					        <input class="checkbox" id="<?php echo $enable_utility_menu; ?>" type="checkbox" name="<?php echo $enable_utility_menu; ?>" value="true"<?php checked(TRUE, (bool) get_option($enable_utility_menu)); ?> /> Hide Utility Navigation
					    </label>
					</p>
    		</div>
    	</div>
		
		</div> <!-- theme-options -->
	</div> <!-- inside -->
</div> <!-- postbox -->