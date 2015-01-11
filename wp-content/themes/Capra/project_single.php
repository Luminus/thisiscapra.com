<?php
/*
Template Name: projects-single
*/

get_header(); ?>

<nav class="project-nav row">
	<ul class="twelvecol last">
		<li>
			<a class="<?php if ( is_page("coldclaim")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/coldclaim">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/cc-sm.jpg" alt="coldclaim" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("coldclaim-website")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/coldclaim-website">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/cc-web-sm.jpg" alt="coldclaim-website" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("dragimals")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/dragimals">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/dragimals-sm.jpg" alt="dragimals" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("mtp-2013")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/mtp-2013">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/mtp-2013-sm.jpg" alt="mtp-2013" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("mtp-2012")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/mtp-2012">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/mtp-2012-sm.jpg" alt="mtp-2012" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("galactic-fire")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/galactic-fire">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/galactic-fire-sm.jpg" alt="galactic-fire" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("superbetter-mobile")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/superbetter-mobile">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/sb-mobile-sm.jpg" alt="superbetter-mobile" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("superbetter")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/superbetter">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/sb-web-sm.jpg" alt="superbetter" />
			</a>
		</li>
	   <li>
			<a class="<?php if ( is_page("covestor")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/covestor">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/covestor-sm.jpg" alt="covestor" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("totomerch")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/totomerch">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/toto-sm.jpg" alt="totomerch" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("watchy")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/watchy">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/watchy-sm.jpg" alt="watchy" />
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("braineos")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/braineos">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/braineos-sm.jpg" alt="braineos" />
			</a>
		</li>
	</ul>
</nav>


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
  	<div class="row">
  		<div class="twelvecol last portfolio-entry">
    		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		</div>
	</div>

   

   <div class="row summaries">
   	<div class="twocol"></div>
   	<div class="sixcol">
		<?php echo get_post_meta($post->ID, "the_solution", true); ?>
   	</div>
   	<div class="fourcol last">
   		<h3>What I did</h3>
		<?php echo get_post_meta($post->ID, "what_we_did", true); ?>
   	</div> 
</div>
	<div class="row">
		<div class="twocol"></div>
   	<div class="eightcol">
		
		<?php echo get_post_meta($post->ID, "the_problem", true); ?>
   	</div>
   	<div class="twocol last"></div>
   </div>
  
  </article>
  <?php endwhile; endif; ?>

	

</section>
<?php get_footer(); ?>
