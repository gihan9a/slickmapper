<?php
	$option_fields[] = $utility_bg = THEME_PREFIX . "utility_bg";
	$option_fields[] = $utility_border = THEME_PREFIX . "utility_border";
	$option_fields[] = $utility_hover_bg = THEME_PREFIX . "utility_hover_bg";
	$option_fields[] = $utility_hover_border = THEME_PREFIX . "utility_hover_border";
	$option_fields[] = $primary1_bg = THEME_PREFIX . "primary1_bg";
	$option_fields[] = $primary1_border = THEME_PREFIX . "primary1_border";
	$option_fields[] = $primary1_hover_bg = THEME_PREFIX . "primary1_hover_bg";
	$option_fields[] = $primary1_hover_border = THEME_PREFIX . "primary1_hover_border";
	$option_fields[] = $primary2_bg = THEME_PREFIX . "primary2_bg";
	$option_fields[] = $primary2_border = THEME_PREFIX . "primary2_border";
	$option_fields[] = $primary2_hover_bg = THEME_PREFIX . "primary2_hover_bg";
	$option_fields[] = $primary2_hover_border = THEME_PREFIX . "primary2_hover_border";
	$option_fields[] = $primary3_bg = THEME_PREFIX . "primary3_bg";
	$option_fields[] = $primary3_border = THEME_PREFIX . "primary3_border";
	$option_fields[] = $primary3_hover_bg = THEME_PREFIX . "primary3_hover_bg";
	$option_fields[] = $primary3_hover_border = THEME_PREFIX . "primary3_hover_border";
?>
<div class="cs postbox">

	<h3>Theme Styles</h3>
    
	<div class="inside">
		<div class="theme-options">
		
    	<p class="intro">Use the options below to change the default theme styles.</p>
    	
    	<div class="inner">
    		<h4>Utility Navigation:</h4>
    		<div class="table">
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $utility_bg; ?>">Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $utility_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $utility_bg; ?>" type="text" name="<?php echo $utility_bg; ?>" value="<?php echo get_option($utility_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($utility_bg) ) echo '#' . get_option($utility_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $utility_border; ?>">Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $utility_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $utility_border; ?>" type="text" name="<?php echo $utility_border; ?>" value="<?php echo get_option($utility_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($utility_border) ) echo '#' . get_option($utility_border); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $utility_hover_bg; ?>">Hover Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $utility_hover_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $utility_hover_bg; ?>" type="text" name="<?php echo $utility_hover_bg; ?>" value="<?php echo get_option($utility_hover_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($utility_hover_bg) ) echo '#' . get_option($utility_hover_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $utility_hover_border; ?>">Hover Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $utility_hover_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $utility_hover_border; ?>" type="text" name="<?php echo $utility_hover_border; ?>" value="<?php echo get_option($utility_hover_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($utility_hover_border) ) echo '#' . get_option($utility_hover_border); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    		</div><!-- table -->
    	</div><!-- inner -->
    	
    	<div class="inner">
    		<h4>Primary Navigation:</h4>
    		<div class="table">
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary1_bg; ?>">Level 1 Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary1_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary1_bg; ?>" type="text" name="<?php echo $primary1_bg; ?>" value="<?php echo get_option($primary1_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary1_bg) ) echo '#' . get_option($primary1_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary1_border; ?>">Level 1 Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary1_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary1_border; ?>" type="text" name="<?php echo $primary1_border; ?>" value="<?php echo get_option($primary1_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary1_border) ) echo '#' . get_option($primary1_border); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary1_hover_bg; ?>">Level 1 Hover Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary1_hover_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary1_hover_bg; ?>" type="text" name="<?php echo $primary1_hover_bg; ?>" value="<?php echo get_option($primary1_hover_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary1_hover_bg) ) echo '#' . get_option($primary1_hover_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary1_hover_border; ?>">Level 1 Hover Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary1_hover_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary1_hover_border; ?>" type="text" name="<?php echo $primary1_hover_border; ?>" value="<?php echo get_option($primary1_hover_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary1_hover_border) ) echo '#' . get_option($primary1_hover_border); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary2_bg; ?>">Level 2 Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary2_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary2_bg; ?>" type="text" name="<?php echo $primary2_bg; ?>" value="<?php echo get_option($primary2_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary2_bg) ) echo '#' . get_option($primary2_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary2_border; ?>">Level 2 Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary2_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary2_border; ?>" type="text" name="<?php echo $primary2_border; ?>" value="<?php echo get_option($primary2_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary2_border) ) echo '#' . get_option($primary2_border); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary2_hover_bg; ?>">Level 2 Hover Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary2_hover_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary2_hover_bg; ?>" type="text" name="<?php echo $primary2_hover_bg; ?>" value="<?php echo get_option($primary2_hover_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary2_hover_bg) ) echo '#' . get_option($primary2_hover_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary2_hover_border; ?>">Level 2 Hover Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary2_hover_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary2_hover_border; ?>" type="text" name="<?php echo $primary2_hover_border; ?>" value="<?php echo get_option($primary2_hover_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary2_hover_border) ) echo '#' . get_option($primary2_hover_border); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary1_bg; ?>">Level 3 Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary3_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary3_bg; ?>" type="text" name="<?php echo $primary3_bg; ?>" value="<?php echo get_option($primary3_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary1_bg) ) echo '#' . get_option($primary3_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary3_border; ?>">Level 3 Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary3_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary3_border; ?>" type="text" name="<?php echo $primary3_border; ?>" value="<?php echo get_option($primary3_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary3_border) ) echo '#' . get_option($primary3_border); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary3_hover_bg; ?>">Level 3 Hover Background Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary3_hover_bg; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary3_hover_bg; ?>" type="text" name="<?php echo $primary3_hover_bg; ?>" value="<?php echo get_option($primary3_hover_bg); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary3_hover_bg) ) echo '#' . get_option($primary3_hover_bg); ?>"></span>
    					</p>
    				</div><!-- col -->
    			</div><!-- row -->
    			
    			<div class="row">
    				<div class="col left">
    					<p>
    						<label for="<?php echo $primary3_hover_border; ?>">Level 3 Hover Border Color</label>
    					</p>
    				</div>
    				<div class="col right">
    					<p>
								<script language="javascript">
								(function($){
									var initLayout = function() {
										$('#<?php echo $primary3_hover_border; ?>').ColorPicker({
											onSubmit: function(hsb, hex, rgb, el) {
												$(el).val(hex);
												$(el).ColorPickerHide();
											},
											onBeforeShow: function () {
												$(this).ColorPickerSetColor(this.value);
											}
										})
										.bind('keyup', function(){
											$(this).ColorPickerSetColor(this.value);
										});
									};
									
									EYE.register(initLayout, 'init');
								})(jQuery)
								</script>
								# <input class="f75" id="<?php echo $primary3_hover_border; ?>" type="text" name="<?php echo $primary3_hover_border; ?>" value="<?php echo get_option($primary3_hover_border); ?>" />
								<span class="color-sample" style="background: <?php if ( get_option($primary3_hover_border) ) echo '#' . get_option($primary3_hover_border); ?>"></span>
    					</p>
    				</div><!-- col -->
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