<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	<footer id="colophon" class="site-footer container mt-5">
		<section class="row mb-5 small mb-5">

			<?php if(is_active_sidebar('footer-sidebar-1')): ?>
				<div id="footer-area-one" class="col-lg d-xl-flex mb-4">
			    <div class="d-inline-block">
						<?php dynamic_sidebar('footer-sidebar-1'); ?>
					</div>
			 	</div>
		  <?php endif; ?>

			<?php if(is_active_sidebar('footer-sidebar-2')): ?>
				<div id="footer-area-two" class="col-lg d-xl-flex mb-4">
			    <div class="d-inline-block">
						<?php dynamic_sidebar('footer-sidebar-2'); ?>
					</div>
			 	</div>
		  <?php endif; ?>

		  <?php if(is_active_sidebar('footer-sidebar-3')): ?>
				<div id="footer-area-three" class="col-lg d-xl-flex mb-4">
			    <div class="d-inline-block">
						<?php dynamic_sidebar('footer-sidebar-3'); ?>
					</div>
			 	</div>
		  <?php endif; ?>

			<?php if(is_active_sidebar('footer-sidebar-4')): ?>
				<div id="footer-area-four" class="col-lg d-xl-flex mb-4">
			    <div class="d-inline-block">
						<?php dynamic_sidebar('footer-sidebar-4'); ?>
					</div>
			 	</div>
		  <?php endif; ?>

			<?php if(is_active_sidebar('footer-sidebar-5')): ?>
				<div id="footer-area-five" class="col-lg d-xl-flex mb-4">
			    <div class="d-inline-block">
						<?php dynamic_sidebar('footer-sidebar-5'); ?>
					</div>
			 	</div>
		  <?php endif; ?>

			<?php if(is_active_sidebar('footer-sidebar-6')): ?>
				<div id="footer-area-six" class="col-lg d-xl-flex mb-4">
			    <div class="d-inline-block">
						<?php dynamic_sidebar('footer-sidebar-6'); ?>
					</div>
			 	</div>
		  <?php endif; ?>
		</section>

		<div class="site-info">
			<?php
			$footer_info_left = get_theme_mod( '_themename_footer_info_left', '' );
			$footer_info_right = get_theme_mod( '_themename_site_info', '' );
			?>

			<?php if ( $footer_info_left || $footer_info_right ): ?>

			  <div class="row small">
			    <div class="col-sm-6">
			      <?php if ( $footer_info_left ): ?>
			        <div class="footer-info w-100">
			          <?php
			            $allowed = array('a' => array(
			              'href' => array(),
			              'title' => array()
			            ));
			            echo wp_kses($footer_info_left, $allowed);
			          ?>
			        </div>
			      <?php endif; ?>
			    </div>

			    <div class="col-sm-6 d-flex justify-content-sm-end">
			      <?php if ( $footer_info_right ): ?>
			        <div class="footer-info d-inline-block">
			          <?php
			            $allowed = array('a' => array(
			              'href' => array(),
			              'title' => array()
			            ));
			            echo wp_kses($footer_info_right, $allowed);
			          ?>
			        </div>
			      <?php endif; ?>
			    </div>
			  </div>

			<?php endif; ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
