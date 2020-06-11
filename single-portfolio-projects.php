<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portfolio
 */

get_header();
?>

<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', get_post_type() ); ?>

		<?php 
		$link = get_field('url');
		if( $link ): ?>
		    <a class="button" href="<?php echo esc_url( $link ); ?>">View Live Site</a>
		<?php endif; 

		endwhile; ?>

		<h3><?php the_field('header_scope');?></h3>
		<p><?php the_field('scope'); ?></p>
		<h3><?php the_field('header_goal');?></h3>
		<p><?php the_field('goal'); ?></p>

		<?php if( have_rows('slider') ): ?> 
			<div class="flexslider">
				<ul class="slides">
					<?php while( have_rows('slider') ): the_row(); 
					
					 ?>
					<li><?php echo wp_get_attachment_image(get_sub_field('image1'), 'full'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>

		<h3><?php the_field('header_process');?></h3>
		<p><?php the_field('process'); ?></p>
		<h3><?php the_field('header_hindsight');?></h3>
		<p><?php the_field('hindsight'); ?></p>

		
</main>
<?php
get_footer();
