<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_test
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info1">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'my_test' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'my_test' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'my_test' ), 'my_test', '<a href="https://automattic.com/" rel="designer">AlexeyKulchenko</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
