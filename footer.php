<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lite_Photo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container">

		<div class="site-copyright">
			<p><?php esc_html_e( 'All images are copyrighted Lite Photo and may not be
			 					duplicated without their express consent.', 'litephoto '); ?></p>
		</div><!-- .site-copyright -->

		<div class="footer-socials">
			<ul class="footer-socials-list">
				<li class="footer-social footer-email">
					<p><a href="mailto:<?php echo sanitize_email( 'justiny.ahinon@gmail.com' ); ?>">
						<?php echo sanitize_email( 'justiny.ahinon@gmail.com' ); ?>
					</a></p>
				</li>
				<li class="footer-social footer-instagram">
					<p><a href="<?php echo esc_url( 'https://www.facebook.com/litephoto' ) ?>">
					<?php esc_html_e( 'Facebook', 'litephoto' ) ?></a></p>
				</li>
				<li class="footer-social footer-facebook">
					<p><a href="<?php echo esc_url( 'https://www.instagram.com/litephoto' ) ?>">
					<?php esc_html_e( 'Instagram', 'litephoto' ) ?></a></p>
				</li>
			</ul>
		</div><!-- .footer-socials -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
