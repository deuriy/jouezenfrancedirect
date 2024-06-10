<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jouer_en_France_direct
 */

?>

	</div><!-- #container -->
	<footer id="colophon" class="site-footer">
		<div class="container">
				
			<div class="site-footer__top">
				<div class="site-footer__top-col">
					<?php //dynamic_sidebar( 'footer-top-left' ); ?>
					<div class="site-branding site-branding--small">
						<?php
						the_custom_logo();
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
								<?php //bloginfo( 'name' ); ?>
								JOUER EN FRANCE <span>DIRECT</span>
							</a>
							<?php
						$jouezenfrancedirect_description = get_bloginfo( 'description', 'display' );
						if ( $jouezenfrancedirect_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $jouezenfrancedirect_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>

				<div class="site-footer__top-col">
					<?php dynamic_sidebar( 'footer-top-middle' ); ?>
				</div>

				<div class="site-footer__top-col">
					<?php dynamic_sidebar( 'footer-top-right' ); ?>
				</div>
			</div>

			<div class="site-footer__bottom">
				<div class="site-footer__bottom-col">
					<?php dynamic_sidebar( 'footer-bottom-left' ); ?>
				</div>

				<div class="site-footer__bottom-col">
					<?php dynamic_sidebar( 'footer-bottom-right' ); ?>
				</div>
			</div>
		</div>

		<!-- <div class="site-info"> -->
			<!-- <a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'jouezenfrancedirect' ) ); ?>"> -->
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'jouezenfrancedirect' ), 'WordPress' );
				?>
			<!-- </a> -->
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'jouezenfrancedirect' ), 'jouezenfrancedirect', '<a href="http://underscores.me/">Yuriy Demchenko</a>' );
				?>
		<!-- </div> -->
		<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
