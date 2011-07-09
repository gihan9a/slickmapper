<?php
	$option_fields[] = $favicon = THEME_PREFIX . "favicon";
	$option_fields[] = $appleicon = THEME_PREFIX . "appleicon";
	$option_fields[] = $gravatar = THEME_PREFIX . "gravatar";
?>
<div class="cs postbox">
	
	<h3>Icons</h3>
  
	<div class="inside">
		<div class="theme-options">
		
			<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
				
    	<div class="inner">
				<h4>Custom Favicon</h4>
				<p>Upload and configure a custom favicon. It is recommended that you use an image that is proportionally square (e.g. "50px x 50px").</p>
				<div class="table">
					<div class="row last">
						<div class="col left">
							<p>
								<label class="upload">Upload favicon:
									<input class="file" id="favicon_upload" type="file" name="<?php echo THEME_PREFIX; ?>favicon_upload" />
								</label>
							</p>
						</div>
					
						<div class="col right">
							<p>
							  <input type="submit" class="button" value="<?php esc_attr_e('Upload'); ?>" />
							</p>
						</div>
						
						<div class="clearfix"></div>
						
						<?php if (get_option($favicon)) { ?>
							<p>
								<label for="<?php echo THEME_PREFIX; ?>delete_favicon">
									<input class="checkbox" id="<?php echo THEME_PREFIX; ?>delete_favicon" type="checkbox" name="<?php echo THEME_PREFIX; ?>delete_favicon" value="true" /> Delete Favicon Image...
								</label>
							</p>
							<img class="image-preview" src="<?php echo get_option($favicon); ?>" alt="Favicon Preview" />
						<?php } ?>
					
						<input type="hidden" name="<?php echo $favicon; ?>" value="<?php echo get_option($favicon); ?>" />
					</div><!-- row -->
				</div><!-- table -->
			</div><!-- inner -->
			
			<div class="divider"><!-- nothing to see here --></div>
			
    	<div class="inner">
				<h4>Custom Apple Touch Icon</h4>
				<p>Upload and configure a custom apple-touch-icon. It is recommended that you use an image that is proportionally square (e.g. "50px x 50px").</p>
				<div class="table">
					<div class="row last">
						<div class="col left">
							<p>
								<label class="upload">Upload apple touch icon:
									<input class="file" id="appleicon_upload" type="file" name="<?php echo THEME_PREFIX; ?>appleicon_upload" />
								</label>
							</p>
						</div>
						<div class="col right">
						  <p>
						    <input type="submit" class="button" value="<?php esc_attr_e('Upload'); ?>" />
						  </p>
						</div>
					
						<div class="clearfix"></div>
					
						<?php if (get_option($appleicon)) { ?>
							<p>
								<label for="<?php echo THEME_PREFIX; ?>delete_appleicon">
									<input class="checkbox" id="<?php echo THEME_PREFIX; ?>delete_appleicon" type="checkbox" name="<?php echo THEME_PREFIX; ?>delete_appleicon" value="true" /> Delete apple-touch-icon Image...
								</label>
							</p>
							<img class="image-preview" src="<?php echo get_option($appleicon); ?>" alt="Apple Touch Icon Preview" />
						<?php } ?>
						
						<input type="hidden" name="<?php echo $appleicon; ?>" value="<?php echo get_option($appleicon); ?>" />
					</div><!-- row -->
				</div><!-- table -->
			</div><!-- inner -->
						
			<div class="inner close">
			  <p class="save">
			  	<input type="submit" class="button-primary" value="Save Changes" />
			  </p>
			</div>
		
		</div> <!-- theme-options -->
	</div> <!-- inside -->
</div> <!-- postbox -->