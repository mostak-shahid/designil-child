<?php
//Add widgets area
function mos_widgets_init(){
	register_sidebar(array(
		'id' => 'author_widget',
		'name' => __('Author Widget', 'mosacademy'),
		'description' => __('Add widgets here to appear in your Author Page', 'mosacademy'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
		'after_widget' => '</aside>'
	));	
}
add_action('widgets_init', 'mos_widgets_init');