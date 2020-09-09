<?php
/**
 * Theme Customizer
 *
 * @package WordPress
 * @subpackage _themename
 * @since 1.0.0
 */

/**
 * Customizer setup and function sanitization.
 *
 * @param array $wp_customize.
 * @return void
 */
function _themename_customize_register( $wp_customize ) {

	/**
	 * Blog name
	 */

	// selective settings para el blogname de wordpress
	// Blogname = setting ( de wordpress en este caso )
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

	// selective settings para el blogname de wordpress
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
			// 'settings' => array('blogname')
			'selector' => '.navbar-brand',
			'container_inclusive' => false,
			'render_callback' => function() {
					bloginfo( 'name' );
			}
	));

	/**
	 * Footer Settings
	 */

	 $wp_customize->add_section( '_themename_footer_options', array(
		 'title' => esc_html__( 'Footer Options', '_themename' ),
		 'description' => esc_html__( 'You can change footer options from here.', '_themename' ),
		 'priority' => 30
	 ));

	 // Left
	 $wp_customize->add_setting('_themename_footer_info_left', array(
			 'default' => '', // check box chequeado
			 'sanitize_callback' => '_themename_sanitize_site_info'
	 ));

	 // Left
	 $wp_customize->add_control( '_themename_footer_info_left', array(
		 'type' => 'text',
		 'label' => esc_html__( 'Site footer info left', '_themename' ),
		 'section' => '_themename_footer_options' // section id
	 ));

	 // Right
	 $wp_customize->add_setting( '_themename_site_info', array(
		 'default' => '',
		 'sanitize_callback' => '_themename_sanitize_site_info'
	 ));

	 // Right
	 $wp_customize->add_control( '_themename_site_info', array(
		 'type' => 'text',
		 'label' => esc_html__( 'Site Info', '_themename' ),
		 'section' => '_themename_footer_options' // section id
	 ));

	/**
	* Sanitizes site info
	*
	* @return string anchor tags are allowed.
	* @param string $input for the footer info.
	*/
	 function _themename_sanitize_site_info( $input ) {
			 $allowed = array('a' => array(
					 'href' => array(),
					 'title' => array()
			 ));
			 return wp_kses($input, $allowed);
	 }
}
add_action( 'customize_register', '_themename_customize_register' );
