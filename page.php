<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="main">
	
		<?php while ( have_posts() ) : the_post(); ?> 
		<!-- article -->
		<article>
			<div class="row white-background">
				<?php the_content(); ?>
			</div>
			<?php while(has_sub_field("additional-content")): ?>
				<?php if(get_row_layout() == "tan-background"): // layout: Content ?>
	 				<div class="row tan-background">
						<?php the_sub_field("content"); ?>
					</div>
	 			<?php endif; ?>
	 			<?php if(get_row_layout() == "white-background"): // layout: Content ?>
	 				<div class="row">
						<?php the_sub_field("content"); ?>
					</div>
	 			<?php endif; ?>
 			<?php endwhile; ?>
		</article>
		<!-- /article -->
	
		<?php endwhile; ?>
		<?php get_sidebar(); ?>
	</section>
	<!-- /section -->

<?php get_footer(); ?>r
