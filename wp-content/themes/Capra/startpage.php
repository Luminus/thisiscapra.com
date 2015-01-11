<?php
/*
Template Name: start page	
*/

get_header(); ?>

<section class="home">
	<!--<img class="icon" src="<?php bloginfo('url'); ?>/wp-content/themes/capra/images/capra.svg" />-->
	<h1>This is Capra.<a href="http://twentytwowords.com/2012/01/11/13-pictures-of-crazy-goats-on-cliffs/" target="_blank">*</a> </h1> 
	<h3>Hello, I'm Kat. I design websites, games &amp; apps. Like goats, I like playful work, am curious about the world, and enjoy working within the herd to make great things.</h3>
	<a class="button" href="<?php bloginfo('url') ?>/about" alt="about us">I'm curious too</a>
</section>
<section class="featured">

	<a href="<?php bloginfo('url') ?>/projects/dragimals" class="dragimal">dragimals</a>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>


<?php endwhile; ?>
</section>
<?php get_footer(); ?>