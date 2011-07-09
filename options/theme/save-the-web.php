<?php
	$option_fields[] = $no_ie = THEME_PREFIX . "no_ie";
	$option_fields[] = $pushup = THEME_PREFIX . "pushup";
?>
<div class="cs postbox">

    <h3>Save the Web</h3>
    
	<div class="inside">
		<div class="theme-options">
			
			<div class="inner">
    		<p>Help save the internet by letting IE6 users know that there are other options available.</p>
    		<div class="table">
    			<p>
    				<label for="<?php echo $no_ie; ?>">
    			        <input class="checkbox" id="<?php echo $no_ie; ?>" type="checkbox" name="<?php echo $no_ie; ?>" value="true"<?php checked(TRUE, (bool) get_option($no_ie)); ?> /> <?php _e("Save the Web"); ?>
    			    </label>
    			</p>
    		</div>
    	</div>
    	
			<div class="inner">
    		<p>Take things another step further by letting your users know that there are updates available to browser.</p>
    		<div class="table">
    			<p>
    				<label for="<?php echo $pushup; ?>">
    			        <input class="checkbox" id="<?php echo $pushup; ?>" type="checkbox" name="<?php echo $pushup; ?>" value="true"<?php checked(TRUE, (bool) get_option($pushup)); ?> /> <?php _e("Pushup the web"); ?>
    			    </label>
    			    <span class="note">This currently supports Internet Explorer, Firefox, Safari, and Opera. Learn more at <a href="http://www.pushuptheweb.com/" title="Pushup The Web" target="_blank">here</a>.</span>
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