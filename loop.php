<?php if (is_category(3)){
query_posts($query_string . "&order=ASC");} ?>

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
		
		<!-- post title -->
		<h2>
			<?php the_title(); ?>
		</h2>
		<!-- /post title -->
		
		<?php the_content(); ?>
		
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

