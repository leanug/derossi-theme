<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site d-flex flex-column">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_themename' ); ?></a>

	<header id="masthead" class="site-header container py-4">
		<div class="row align-items-center">
			<div class="col-6 col-md-2 col-lg-1 order-1 h-100">
				<div class="site-branding  m-0 p-0  d-flex align-items-center">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<p class="site-title m-0 p-0">
							<a class="d-inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</div><!-- .col -->

			<div id="outter-nav-container" class="col-12 d-lg-inline-block col-md-10 col-lg-11 order-3 order-lg-2">
				<div id="inner-nav-container" class="d-lg-flex overflow-hidden align-items-center h-0">
					<nav id="site-navigation" class="main-navigation w-50">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'depth'          => 1,
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'menu-items d-flex flex-column flex-lg-row justify-content-start',
							)
						);
						?>
					</nav><!-- #site-navigation -->

					<?php if( class_exists( 'WooCommerce') ): ?>
					<div class="border border-light mt-3 mb-4 d-lg-none"></div>

					<div id="wc-nav" class="d-flex w-50 justify-content-lg-end align-items-center order-4 order-lg-3">
						<ul class="m-0 d-lg-flex">
							<?php if ( is_user_logged_in() ): ?>
							<li>
								<a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="mr-3">
									<?php esc_html_e( 'Account', '_themename' ); ?>
								</a>
								<a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ); ?>">
									<?php esc_html_e( 'Log out', '_themename' ); ?>
								</a>
							</li>
							<?php else: ?>
							<li>
								<a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">
									<?php esc_html_e( 'Log in / Register', '_themename' ); ?>
								</a>
							</li>
							<?php endif; ?>
							<li class="ml-lg-4">
								<!-- Cart icon -->
								<a class="mr-1" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', '_themename' ); ?>"><i class="fas fa-shopping-cart "></i></a>
								<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', '_themename' ); ?>">
									<?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count(), '_themename' ); ?> - <?php echo WC()->cart->get_cart_total(); ?>
								</a>
							</li>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-6 col-md-10 d-lg-none d-flex justify-content-end align-items-center order-2">
				<button id="site-nav-btn" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span id="bars-icon"><i class="fas fa-bars"></i></span>
          <span id="times-icon" class="d-none"><i class="fas fa-times"></i></span>
				</button>
			</div>
		</div><!-- .row -->
	</header><!-- #masthead -->
