<?php
$cs_enable_urls = get_option(THEME_PREFIX . "enable_urls");
$cs_utility_bg = '#' . get_option(THEME_PREFIX . "utility_bg");
$cs_utility_border = '#' . get_option(THEME_PREFIX . "utility_border");
$cs_utility_hover_bg = '#' . get_option(THEME_PREFIX . "utility_hover_bg");
$cs_utility_hover_border = '#' . get_option(THEME_PREFIX . "utility_hover_border");
$cs_primary1_bg = '#' . get_option(THEME_PREFIX . "primary1_bg");
$cs_primary1_border = '#' . get_option(THEME_PREFIX . "primary1_border");
$cs_primary1_hover_bg = '#' . get_option(THEME_PREFIX . "primary1_hover_bg");
$cs_primary1_hover_border = '#' . get_option(THEME_PREFIX . "primary1_hover_border");
$cs_primary2_bg = '#' . get_option(THEME_PREFIX . "primary2_bg");
$cs_primary2_border = '#' . get_option(THEME_PREFIX . "primary2_border");
$cs_primary2_hover_bg = '#' . get_option(THEME_PREFIX . "primary2_hover_bg");
$cs_primary2_hover_border = '#' . get_option(THEME_PREFIX . "primary2_hover_border");
$cs_primary3_bg = '#' . get_option(THEME_PREFIX . "primary3_bg");
$cs_primary3_border = '#' . get_option(THEME_PREFIX . "primary3_border");
$cs_primary3_hover_bg = '#' . get_option(THEME_PREFIX . "primary3_hover_bg");
$cs_primary3_hover_border = '#' . get_option(THEME_PREFIX . "primary3_hover_border");
?>

/* ------------------------------------------------------------
	Primary Navigation
------------------------------------------------------------ */

<?php if ($cs_enable_urls) { ?>
a:link:before,
a:visited:before {
	content: "";
}
<?php } ?>

/* --------	Top Level --------- */

#primaryNav li a {
	background-color: <?php echo $cs_primary1_bg; ?>;
	border-color: <?php echo $cs_primary1_border; ?>;
}
#primaryNav li a:hover {
	background-color: <?php echo $cs_primary1_hover_bg; ?>;
	border-color: <?php echo $cs_primary1_hover_border; ?>;
}
#primaryNav li a:link:before,
#primaryNav li a:visited:before {
	color: <?php echo $cs_primary1_border; ?>;
}

/* --------	Second Level --------- */

#primaryNav li li a {
	background-color: <?php echo $cs_primary2_bg; ?>;
	border-color: <?php echo $cs_primary2_border; ?>;
}
#primaryNav li li a:hover {
	background-color: <?php echo $cs_primary2_hover_bg; ?>;
	border-color: <?php echo $cs_primary2_hover_border; ?>;
}
#primaryNav li li a:link:before,
#primaryNav li li a:visited:before {
	color: <?php echo $cs_primary2_border; ?>;
}

/* --------	Third Level --------- */

#primaryNav li li li a {
	background-color: <?php echo $cs_primary3_bg; ?>;
	border-color: <?php echo $cs_primary3_border; ?>;
}
#primaryNav li li li a:hover {
	background-color: <?php echo $cs_primary3_hover_bg; ?>;
	border-color: <?php echo $cs_primary3_hover_border; ?>;
}
#primaryNav li li li a:link:before,
#primaryNav li li li a:visited:before {
	color: <?php echo $cs_primary3_border; ?>;
}


/* ------------------------------------------------------------
	Utility Navigation
------------------------------------------------------------ */
#utilityNav li a {
	background-color: <?php echo $cs_utility_bg; ?>;
	border-color: <?php echo $cs_utility_border; ?>;
}
#utilityNav li a:hover {
	background-color: <?php echo $cs_utility_hover_bg; ?>;
	border-color: <?php echo $cs_utility_hover_border; ?>;
}
#utilityNav li a:link:before,
#utilityNav li a:visited:before {
	color: <?php echo $cs_utility_border; ?>;
}
