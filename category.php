<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="main">
			<div class="row white-background">
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>
	</section>
	<?php get_sidebar(); ?>
	<!-- /section -->
	


<?php get_footer(); ?>