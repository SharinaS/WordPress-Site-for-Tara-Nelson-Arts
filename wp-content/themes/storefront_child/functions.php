<?php
/* The following changes the text under the copyright at bottom of the website */
if ( ! function_exists( 'storefront_credit' ) ) {
	/**
	 * Display the theme credit
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_credit() {
		?>
		<div class="site-info">
			<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
			<?php if ( apply_filters( 'storefront_credit_link', true ) ) { ?>
			<br />
			<?php
				if ( apply_filters( 'storefront_privacy_policy_link', true ) && function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
			?>
			<?php echo '<a href="https://woocommerce.com" target="_blank" title="' . esc_attr__( 'WooCommerce - The Best eCommerce Platform for WordPress', 'storefront' ) . '" rel="author">' . esc_html__( 'Built with Love', 'storefront' ) . '</a>.' ?>
			<?php } ?>
		</div><!-- .site-info -->
		<?php
	}
}


/* The following changes the number of categories allowed in the "Shop by Category" section */
add_filter('storefront_product_categories_args','storefront_product_categories_custom_args');

function storefront_product_categories_custom_args( $args ) {
$custom_limit_count = 10; // changes number of categories shown
$args['limit'] = $custom_limit_count;
return $args;
}
