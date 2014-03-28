<?php get_header(); ?>

<?php query_posts("cat=3"); ?>
	
	<!-- section -->
	<section role="main" class="main no-sidebar">
				<?php get_template_part('loop-events'); ?>
				<?php get_template_part('pagination'); ?>
	</section>
	<!-- /section -->
	


<?php get_footer(); ?>