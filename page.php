<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="main">
	
		<?php while ( have_posts() ) : the_post(); ?> 
		<!-- article -->
		<article>

			<?php the_content(); ?>
		</article>
		<!-- /article -->
	
		<?php endwhile; ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>