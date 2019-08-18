<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
</div><!-- .main-content -->
<?php
	$year = Date('Y');
	$site_title = get_bloginfo( 'name' );
?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo" style="background-image: url('<?php echo get_template_directory_uri().'/images/dark-wood@2x.png' ?>')">

				<div class="flex-footer">
					<div class="footer-contents">
						<div class="contact-info">
							<h3>Contact Info</h3>
							<ul>
								<li>
									<i class="fas fa-envelope"></i>
									<a href="mailto:info@inhabitent.com">
									info@inhabitent.com
									</a>
								</li>
								<li>
									<i class="fas fa-phone-alt"></i>
									<a href="tel:778-456-7891">778-456-7891</a>
								</li>
								<li>
									<i class="fab fa-facebook-square"></i>
									<i class="fab fa-twitter-square"></i>
									<i class="fab fa-google-plus-square"></i>
								</li>
							</ul>
						</div>
						<div class="business-hours">
							<h3>Business Hours</h3>
							<ul>
								<li><strong>Monday-Friday:</strong> 9am to 5pm</li>
								<li><strong>Saturday:</strong> 10am to 2pm</li>
								<li><strong>Sunday:</strong> Closed</li>
							</ul>
						</div>
						<div class="inhabitent-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-text.svg' ?>" alt="site-logo">
							</a>
						</div>
					</div>
				</div>

				<div class="footer-copyright">
					<div class="site-info">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php printf( esc_html( "Copyright © %u %s" ), $year, $site_title ); ?>
						</a>
					</div><!-- .site-info -->
				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>