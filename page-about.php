<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

	<img class ="books" src="<?php bloginfo('template_url');?>/images/books.jpg" alt="Books">

	<div class="vl"></div> <!--style .vl {border-left: 6px solid green; height: 500px;} -->

<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

<?php if ( is_page() ) : ?>
						<a class="learn-more" id="home" href="https://jarrodsterling.com">Home</a>
			<?php	endif; ?>

		

	</main><!-- #main -->

<?php
get_footer();