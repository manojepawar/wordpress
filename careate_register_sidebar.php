function supertheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Recent details', 'sktthemes' ),
		'id'            => 'recent_sidebar',
		'description'   => __( 'Appears in the middle section of the site.', 'sktthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'supertheme_widgets_init' );
