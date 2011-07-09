<?php
	$option_fields[] = $analytics_code = THEME_PREFIX . "analytics_code";
?>
<div class="cs postbox">

	<h3>Analytics</h3>
    
	<div class="inside">
		<div class="theme-options">
    
    	<div class="inner">
    		<p>Enter your Analytics code below to enable it by placing in the footer (e.g. Google Analytics).</p>
    		<div class="table">
    			<p><textarea class="option-area" id="<?php echo $analytics_code; ?>" name="<?php echo $analytics_code; ?>"><?php echo get_option($analytics_code); ?></textarea></p>
    		</div>
    	</div>
    	
			<div class="inner close">
				<p class="save">
					<input type="submit" class="button-primary" value="Save Changes" />
				</p>
			</div>
		
		</div> <!-- theme-options -->
	</div> <!-- inside -->
</div> <!-- postbox -->