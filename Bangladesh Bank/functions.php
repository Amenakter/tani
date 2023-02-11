<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assests/css/bootstrap.min.css', array() );

wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assests/js/bootstrap.bundle.min.js', array(), '1.0.0', true );





function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __('banner', 'BB' ),
		'id'            => 'bannerbb',
		'before_widget' => '',
		'after_widget'  => '',
		
	) );
}
   add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

?>