<?php
	$option_fields[] = $enable_flush = THEME_PREFIX . "enable_flush";
?>

<div class="cs postbox">

	<h3>Miscellaneous</h3>
    
	<div class="inside">
		<div class="theme-options">
    	<p class="intro">Miscellaneous things to improve your WordPress website.</p>
    	<div class="inner">
    		<h4>Enable "Flushing"</h4>
    		<p>The <code>flush()</code> function in WordPress can help speed up your website dramatically. <strong>Important:</strong> This has been known to not play nice with W3 Total Cache plugin.</p>
    		<div class="table">
					<p>
    				<label for="<?php echo $enable_flush; ?>">
							<input class="checkbox" id="<?php echo $enable_flush; ?>" type="checkbox" name="<?php echo $enable_flush; ?>" value="true"<?php checked(TRUE, (bool) get_option($enable_flush)); ?> /> <?php _e('Enable "Flushing"'); ?>
						</label>
					</p>
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