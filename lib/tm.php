<?php
class TM {

	function __construct() {
		add_action('init', array($this, 'init'));
	}

	function init() {
		$this->actions();
		$this->filters();
	}

	function actions() {
		add_action('after_switch_theme', 'thesis_generate_css');
		add_action('wp_enqueue_scripts', 'tm_enqueue_styles');
		add_filter('thesis_body_classes', 'tm_body_classes');

		# Pages
		## Home
		//add_filter('thesis_show_sidebars', 'tm_show_sidebars');
    
    # Header
		## Navigation
		remove_action('thesis_hook_before_header', 'thesis_nav_menu');

    #Footer
    remove_action('thesis_hook_footer', 'thesis_attribution'); #Remove thesis attribution
    add_action('thesis_hook_footer', 'footer_attrb_cp');       #Add attribution and Copyright
    add_action('wp_footer','footer_scripts');                  #Add Social Media async script calls
	}

	function filters() {
	}
}
