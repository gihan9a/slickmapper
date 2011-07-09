<?php
	$option_fields[] = $columns = THEME_PREFIX . "columns";
	$option_fields[] = $enable_urls = THEME_PREFIX . "enable_urls";
?>
<div class="postbox">
	
	<h3>Layout</h3>
	
	<div class="inside">
		<div class="cs theme-options">
		
			<div class="inner">
				<h4>Columns</h4>
				<p>Choose how many columns (top level nav items) will be displayed.</p>
				<div class="table">
					<p class="left">
						<label for="<?php echo $columns; ?>">Number of Columns:</label>
					</p>
					<p class="right">
						<?php $colnum = get_option(THEME_PREFIX . "columns"); ?>
						
						<select id="<?php echo $columns; ?>" name="<?php echo $columns; ?>">						
						  <option value="1"<?php if ($colnum=="1") echo 'selected="selected"' ?>>1</option>
						  <option value="2"<?php if ($colnum=="2") echo 'selected="selected"' ?>>2</option>
						  <option value="3"<?php if ($colnum=="3") echo 'selected="selected"' ?>>3</option>
						  <option value="4"<?php if ($colnum=="4") echo 'selected="selected"' ?>>4</option>
						  <option value="5"<?php if ($colnum=="5") echo 'selected="selected"' ?>>5</option>
						  <option value="6"<?php if ($colnum=="6") echo 'selected="selected"' ?>>6</option>
						  <option value="7"<?php if ($colnum=="7") echo 'selected="selected"' ?>>7</option>
						  <option value="8"<?php if ($colnum=="8") echo 'selected="selected"' ?>>8</option>
						  <option value="9"<?php if ($colnum=="9") echo 'selected="selected"' ?>>9</option>
						  <option value="10"<?php if ($colnum=="10") echo 'selected="selected"' ?>>10</option>
						</select>
					</p>
				</div> <!-- table -->
			</div> <!-- inner -->
			
			<div class="divider"><!-- nothing to see here --></div>
			
    	<div class="inner">
    		<h4>Path URLs</h4>
    		<p>By default the web URLs are shown, however you can hide them by checking the box below.</p>
    		<div class="table">
					<p>
    				<label for="<?php echo $enable_urls; ?>">
							<input class="checkbox" id="<?php echo $enable_urls; ?>" type="checkbox" name="<?php echo $enable_urls; ?>" value="true"<?php checked(TRUE, (bool) get_option($enable_urls)); ?> /> <?php _e('Hide URLs'); ?>
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