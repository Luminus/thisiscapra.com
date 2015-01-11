<?php
/*
Template Name: projects
*/

get_header(); ?>




  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
  	<div class="row">
  		<div class="twelvecol last">
    		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		</div>
	</div>

 <nav class="project-nav main row">
	<ul class="twelvecol last">
		<li>
			<a class="<?php if ( is_page("coldclaim")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/coldclaim">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/cc-sm.jpg" alt="coldclaim" />
				<span>ColdClaim</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("coldclaim-website")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/coldclaim-website">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/cc-web-sm.jpg" alt="coldclaim-website" />
				<span>ColdClaim website</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("dragimals")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/dragimals">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/dragimals-sm.jpg" alt="dragimals" />
				<span>Dragimals</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("mtp-2013")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/mtp-2013">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/mtp-2013-sm.jpg" alt="mtp-2013" />
				<span>MTP2013</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("mtp-2012")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/mtp-2012">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/mtp-2012-sm.jpg" alt="mtp-2012" />
				<span>MTP2012</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("galactic-fire")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/galactic-fire">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/galactic-fire-sm.jpg" alt="galactic-fire" />
				<span>Galactic Fire</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("superbetter-mobile")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/superbetter-mobile">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/sb-mobile-sm.jpg" alt="superbetter-mobile" />
				<span>SuperBetter iPhone</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("superbetter")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/superbetter">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/sb-web-sm.jpg" alt="superbetter" />
				<span>SuperBetter</span>
			</a>
		</li>
	   <li>
			<a class="<?php if ( is_page("covestor")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/covestor">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/covestor-sm.jpg" alt="covestor" />
				<span>Covestor</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("totomerch")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/totomerch">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/toto-sm.jpg" alt="totomerch" />
				<span>Totomerch</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("watchy")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/watchy">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/watchy-sm.jpg" alt="watchy" />
				<span>Watchy</span>
			</a>
		</li>
		<li>
			<a class="<?php if ( is_page("braineos")) {?>selected<?php } ?>" href="<?php bloginfo('url') ?>/projects/braineos">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/thumbs/braineos-sm.jpg" alt="braineos" />
				<span>Braineos</span>
			</a>
		</li>
	</ul>
</nav>


  
  </article>
  <?php endwhile; endif; ?>

	

</section>
<?php get_footer(); ?>
