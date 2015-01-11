<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<div class="row blog-posts">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					
			<h1><?php the_title(); ?></h1>
			
				<div class="eightcol content">
				<?php twentyten_posted_on(); ?>

				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

				<p class="tags">

					<?php twentyten_posted_in(); ?>
					<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
				</p>
				<hr />

		<?php comments_template( '', true ); ?>
	</div>
	<?php endwhile; // end of the loop. ?>

	<div class="fourcol last">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>