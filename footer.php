<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			// do_action( 'storefront_footer' );
			?>
			<img src="https://conversionsovereverything.com/wp-content/uploads/2026/09/coe-logo-e1790217012758.png" alt="Conversions Over Everything Logo" class="footer-logo" />
			<p class="white-text no-margin text-center">Dollar Roger &copy; 2026. All Rights Reserved.</p>
			<!-- privacy policy and terms go here -->
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- <script src="//instant.page/5.2.0" type="module" crossorigin="anonymous"></script> -->
</body>
</html>
