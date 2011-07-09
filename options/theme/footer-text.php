<?php
	$option_fields[] = $copy_text = THEME_PREFIX . "copy_text";
	$option_fields[] = $footer_text = THEME_PREFIX . "footer_text";
?>
<div class="cs postbox">

	<h3>Footer Text</h3>
    
	<div class="inside">
		<div class="theme-options">
			
			<div class="inner">
    		<p>Enable "Copyright" text by entering your business name below:</p>
    		
    		<p>
    		  <input class="option-field" id="<?php echo $copy_text; ?>" type="text" name="<?php echo $copy_text; ?>" value="<?php echo get_option($copy_text); ?>" />
    		</p>
    		
    		<div class="table">
    			<p>Enter the text you wish to display within the theme footer here. You can even use some HTML if you want.</p>
    			
    			<p><textarea class="option-area" id="<?php echo $footer_text; ?>" name="<?php echo $footer_text; ?>"><?php echo get_option($footer_text); ?></textarea></p>
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