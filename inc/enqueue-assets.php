<?php
/**
 * Enqueues scripts and passes variables with wp localize script
 *
 * @package WordPress
 * @subpackage _themename
 * @since 1.0.0
 */

/**
* Enqueues min style, font awesome, animate css, jquery and min scripts
*
* @return void
*/
function _themename_assets() {
  wp_enqueue_style(
    '_themename-stylesheet',
    get_template_directory_uri() . '/dist/assets/css/bundle.css',
    array(),
    '1.0.0',
    'all');

  wp_enqueue_style(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.14.0/css/all.css',
    array(),
    'null'
  );

  wp_enqueue_script(
    '_themename-scripts',
    get_template_directory_uri() . '/dist/assets/js/bundle.js',
    array(),
    '1.0.0',
    'true');

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_themename_assets' );

function _themename_add_font_awesome_5_cdn_attributes( $html, $handle ) {
    if ( 'fontawesome' === $handle ) {
        return str_replace( "media='all'", "media='all' integrity='sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc' crossorigin='anonymous'", $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', '_themename_add_font_awesome_5_cdn_attributes', 10, 2 );

function _themename_admin_assets() {
  wp_enqueue_style(
    '_themename-admin-stylesheet',
    get_template_directory_uri() . '/dist/assets/css/editor.css',
    array(),
    '1.0.0',
    'all');
}
add_action( 'admin_enqueue_scripts', '_themename_admin_assets' );
