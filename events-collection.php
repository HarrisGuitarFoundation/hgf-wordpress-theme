<?php //if (is_category(4)){query_posts($query_string . "&order=ASC");} ?>


<?php query_posts("cat=3"); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<span class="collection-grid-item">
		<!-- post thumbnail -->
			<p>
				<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail('medium'); ?>
				</a>
				<?php endif; ?>
			</p>
			<!-- /post thumbnail -->
			
			<!-- post title -->
			<p>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php echo get_post_meta($post->ID, 'guitar-maker', true); ?></a><br />
				<?php echo get_post_meta($post->ID, 'guitar-year', true); ?>, <?php echo get_post_meta($post->ID, 'guitar-city', true); ?>
			</p>
			<!-- /post title -->
		</span>
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

