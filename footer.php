<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			

				<ul>
					<li><a href="https://linkedin.com/in/jsterlingdev" target="_blank">LinkedIn</a></li>
					<li><a href="https://github.com/jsterling-dev" target="_blank">GitHub</a></li>
					<li><a href="mailto:js@jarrodsterling.com" target="_blank">Email</a></li>
				</ul>

			<?php if ( is_single() ) : ?>
						<a href="http://localhost:8888/portfolio/#work">Back To Work</a>
			<?php	endif; ?>

			<?php if ( is_front_page() ) : ?>
						<a href="http://localhost:8888/portfolio">Top</a>
			<?php	endif; ?>

			<?php if ( is_page() ) : ?>
						<a href="http://localhost:8888/portfolio">Home</a>
			<?php	endif; ?>
			




				<p><span id="copyright">©</span> 2020 jarrodsterling.com</p>

				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Custom WordPress Theme: %1$s by %2$s.', 'portfolio' ), "'Portfolio'", '<span class = theme><a href="http://jarrodsterling.com">Jarrod Sterling</a></span>' );
				?>
		</div><!-- .site-info -->

	


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>





