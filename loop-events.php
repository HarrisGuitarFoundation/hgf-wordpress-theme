<?php //if (is_category(4)){query_posts($query_string . "&order=ASC");} ?>


<?php query_posts("cat=3"); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<!-- post thumbnail -->
		<?php
		 if ( has_post_thumbnail()) {
		   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
		   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="colorbox post-thumbnail">';
		   the_post_thumbnail('thumbnail');
		   echo '</a>';
		 }
		 ?>
		<!-- /post thumbnail -->

		<div class="event-date">
			<?php echo get_post_meta($post->ID, 'event-date', true); ?>
		</div>
		<div class="event-body">
			<h2>
				<?php the_title(); ?>
			</h2>		
			<strong>Location:</strong> <?php echo get_post_meta($post->ID, 'event-location', true); ?>
			<?php the_content(); ?>
		</div>
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

