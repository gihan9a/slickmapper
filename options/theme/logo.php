<?php
	$option_fields[] = $title_img = THEME_PREFIX . "title_img";
	$option_fields[] = $title_txt = THEME_PREFIX . "title_txt";
	$option_fields[] = $title_desc = THEME_PREFIX . "title_desc";
	$option_fields[] = $custom_login_logo = THEME_PREFIX . "custom_login_logo";
?>
<div class="postbox">
	
	<h3>Logos</h3>
	
	<div class="inside">
		<div class="cs theme-options">
		
			<p class="intro">Add your own logo, use text, and/or show your site's tagline by enabling the options below.</p>
			
			<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
			
			<div class="inner">
				<h4>Custom Logo</h4>
				<p>Upload and configure a custom image based logo or keep it simple and use a text based logo instead.</p>
				<div class="table">
					<div class="row">
						<div class="col left">
							<p>
								<label>Upload image logo:
							  	<input class="file" id="logo_img_upload" type="file" name="<?php echo THEME_PREFIX; ?>logo_img_upload" />
							  </label>
							</p>
						</div>
						<div class="col right">
							<p>
							  <input type="submit" class="button" value="<?php esc_attr_e('Upload'); ?>" />
							</p>
						</div>
						
						<div class="clearfix"></div>			
					
						<?php if (get_option($title_img)) { ?>
							<p>
								<label for="<?php echo THEME_PREFIX; ?>delete_logo_img">
									<input class="checkbox" id="<?php echo THEME_PREFIX; ?>delete_logo_img" type="checkbox" name="<?php echo THEME_PREFIX; ?>delete_logo_img" value="true" /> Delete Logo Image...
								</label>
							</p>
							<p>
								<img class="image-preview" src="<?php echo get_option($title_img); ?>" alt="Logo Preview" />
							</p>
						<?php } ?>
						
						<input type="hidden" name="<?php echo $title_img; ?>" value="<?php echo get_option($title_img); ?>" />

					</div>
					
					<div class="row">
						<p>
							<label for="<?php echo $title_txt; ?>">Or use "text": <span>(this will override an image logo)</span></label>
						</p>
						<p class="w50">
							<input id="<?php echo $title_txt; ?>" type="text" name="<?php echo $title_txt; ?>" value="<?php echo get_option($title_txt); ?>" />
						</p>
					</div>
					
					<div class="row last">
						<p>
							<label for="<?php echo $title_desc; ?>">
								<input class="checkbox" id="<?php echo $title_desc; ?>" type="checkbox" name="<?php echo $title_desc; ?>" value="true"<?php checked(TRUE, (bool) get_option($title_desc)); ?> /> <?php _e("Check this to show the site's tagline under logo"); ?>
							</label>
						</p>
					</div>

				</div> <!-- table -->
			</div> <!-- inner -->
			
			<div class="divider"><!-- nothing to see here --></div>
			
			<div class="inner">
				<h4>Custom Login Logo</h4>
				<p>Upload and configure a custom image based login logo. Recommended size is 325px x 80px.</p>
				<div class="table">
					<div class="row last">
						<div class="col left">
							<p>
								<label>Upload login logo:
							  	<input class="file" id="login_logo_img_upload" type="file" name="<?php echo THEME_PREFIX; ?>login_logo_img_upload" />
							  </label>
							</p>
						</div>
						<div class="col right">
							<p>
							  <input type="submit" class="button" value="<?php esc_attr_e('Upload'); ?>" />
							</p>
						</div>
						
						<div class="clearfix"></div>			
					
						<?php if (get_option($custom_login_logo)) { ?>
							<p>
								<label for="<?php echo THEME_PREFIX; ?>delete_login_logo_img">
									<input class="checkbox" id="<?php echo THEME_PREFIX; ?>delete_login_logo_img" type="checkbox" name="<?php echo THEME_PREFIX; ?>delete_login_logo_img" value="true" /> Delete Login Logo Image...
								</label>
							</p>
							<p>
								<img class="image-preview" src="<?php echo get_option($custom_login_logo); ?>" alt="Logo Preview" />
							</p>
						<?php } ?>
						
						<input type="hidden" name="<?php echo $custom_login_logo; ?>" value="<?php echo get_option($custom_login_logo); ?>" />

					</div> <!-- row -->
				</div> <!-- table -->
			</div> <!-- inner -->
			
			<div class="inner close">
				<p class="save">
					<input type="submit" class="button-primary" value="Save Changes" />
				</p>
			</div>
		
		</div> <!-- theme-options -->
	</div> <!-- inside -->
</div> <!-- postbox -->