<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<p>&copy; 2018
	<a href="<?php echo esc_url( __( 'http://img210.ksandhu1.imgd.ca/protfolio/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( 'KULPREET SINGH', 'twentyseventeen' ), 'kulpreet' ); ?>
</div><!-- .site-info -->
