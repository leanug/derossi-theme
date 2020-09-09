<?php
/**
 * Register Sidebars
 *
 * @package WordPress
 * @subpackage _themename
 * @since 1.0.0
 */

/**
 * Registers the sidebar widget sidebar and 5 widget sidebars for the footer
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @return void
 */
function _themename_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_themename' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_themename' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

  register_sidebar( array(
   'name'          => 'Footer sidebar one',
   'id'            => 'footer-sidebar-1',
   'description'   => 'This widget sidebar discription',
   'before_widget' => '<section class="footer-sidebar footer-sidebar-one">',
   'after_widget'  => '</section>',
   'before_title'  => '<h5>',
   'after_title'   => '</h5>',
  ));

  register_sidebar( array(
   'name'          => 'Footer sidebar two',
   'id'            => 'footer-sidebar-2',
   'description'   => 'This widget sidebar discription',
   'before_widget' => '<section class="footer-sidebar footer-sidebar-two">',
   'after_widget'  => '</section>',
   'before_title'  => '<h5>',
   'after_title'   => '</h5>',
  ));

  register_sidebar( array(
   'name'          => 'Footer sidebar three',
   'id'            => 'footer-sidebar-3',
   'description'   => 'This widget sidebar discription',
   'before_widget' => '<section class="footer-sidebar footer-sidebar-three">',
   'after_widget'  => '</section>',
   'before_title'  => '<h5>',
   'after_title'   => '</h5>',
  ));

  register_sidebar( array(
   'name'          => 'Footer sidebar four',
   'id'            => 'footer-sidebar-4',
   'description'   => 'This widget sidebar discription',
   'before_widget' => '<section class="footer-sidebar footer-sidebar-three">',
   'after_widget'  => '</section>',
   'before_title'  => '<h5>',
   'after_title'   => '</h5>',
  ));

  register_sidebar( array(
   'name'          => 'Footer sidebar five',
   'id'            => 'footer-sidebar-5',
   'description'   => 'This widget sidebar discription',
   'before_widget' => '<section class="footer-sidebar footer-sidebar-three">',
   'after_widget'  => '</section>',
   'before_title'  => '<h5>',
   'after_title'   => '</h5>',
 ));

  register_sidebar( array(
   'name'          => 'Footer sidebar six',
   'id'            => 'footer-sidebar-6',
   'description'   => 'This widget sidebar discription',
   'before_widget' => '<section class="footer-sidebar footer-sidebar-three">',
   'after_widget'  => '</section>',
   'before_title'  => '<h5>',
   'after_title'   => '</h5>',
 ));
}
add_action( 'widgets_init', '_themename_widgets_init' );
