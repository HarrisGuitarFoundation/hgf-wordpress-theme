<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="main no-sidebar">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article class="collection-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
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
		<nav class="single-post-nav">
			<span class="previous-link"><?php previous_post_link('<span class="previous-link-title">Previous Guitar</span>%link', '%title', true); ?> </span>
			<span class="next-link"><?php next_post_link('<span class="next-link-title">Next Guitar</span>%link', '%title', true); ?> </span>
		</nav>

	</section>
	<!-- /section -->

<?php get_footer(); ?>