<?php get_header(); ?>

	<?php query_posts("page_id=141"); ?>
	
	<?php while ( have_posts() ) : the_post(); ?> 
		<div class="row white-background">
			<?php the_content(); ?>
		</div>
<!-- 	<?php while(has_sub_field("additional-content")): ?>
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
			<?php endwhile; ?> -->
	<?php endwhile; ?>
	
	<!-- section -->
	<section role="main" class="main no-sidebar">
			<div class="row white-background">
				<?php get_template_part('loop-collection'); ?>
				<?php get_template_part('pagination'); ?>
			</div>
	</section>
	<!-- /section -->
	


<?php get_footer(); ?>