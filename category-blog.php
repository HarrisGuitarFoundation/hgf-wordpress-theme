<?php get_header(); ?>
<?php get_sidebar('blog'); ?>
	<!-- section -->
	<section role="main" class="main">
			<div class="row white-background">
				<?php get_template_part('loop-blog'); ?>
				<?php get_template_part('pagination'); ?>
			</div>
	</section>
	<!-- /section -->
	


<?php get_footer(); ?>