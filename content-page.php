<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>

<div class="col-full">
	<img class="full-width-img top-logo" src="https://conversionsovereverything.com/wp-content/uploads/2026/10/coe-logo-white-bg.webp" alt="COE Logo" width="626" height="314" />
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		/**
		 * Functions hooked in to storefront_page add_action
		 *
		 * @hooked storefront_page_header          - 10
		 * @hooked storefront_page_content         - 20
		 */
		do_action( 'storefront_page' );
		?>
	</article>
</div><!-- .col-full -->