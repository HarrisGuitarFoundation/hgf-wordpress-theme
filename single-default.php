<?php get_header(); ?>
	<!-- section -->
	<section role="main" class="main no-sidebar">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		

			
			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->
			
			
			<?php the_content(); // Dynamic Content ?>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->

<?php get_footer(); ?>