<?php

function tm_nav_area() {
	?>
<div id="nav_area" class="full_width">
	<div class="page">
		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
	</div>
</div>
	<?php
}

function tm_enqueue_styles() {
	wp_enqueue_style('tm_style', get_stylesheet_directory_uri() . '/style.css');
}

function tm_body_classes($classes) {
	if(is_home()) {
		$classes[] = 'home';
	}
	return $classes;
}

function tm_show_sidebars($show) {
	return is_home() ? false : $show;
}
