<?php
/*
Template Name: about-page
*/

get_header(); ?>
<section class="meadow">
	<div class="row">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="twelvecol last">
				<h1>The Herd</h1>			
				<h3 class="subhead">With a basketful of design skills, and an incredible extended family, Capra is the design work of Kat Kavanagh, who designs and builds beautiful websites, games and more. </h3>
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

				<div class="herd">
					
					<!-- hidden popups-->

					<div id="kat-popup" class="white-popup mfp-hide">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/team_kat.jpg" alt="Kat Kavanagh" />
					  <div class="content">
					  	<h2>Kat Kavanagh</h2>
						  <h6>Lead designer, coder, ideas generator</h6>
						  <p>Kat loves building beautiful, usable websites and games. When she’s not in front of her computer (it's not often!), she’s off hiking with fellow Capra employees, obsessing over goats or coming up with ideas for new games. Kat is the founder and star player in Capra's team.</p>
						</div>
					</div> <!--kat popup -->


					<div id="kenny-popup" class="white-popup mfp-hide">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/team_kenny.jpg" alt="Kenny Kavanagh" />
						<div class="content">
					  		<h2>Kenny Kavanagh</h2>
						  	<h6>System's administrator, mailman, morale officer</h6>
						 	 <p>Kenny loves swimming, chasing sticks through the heather and playing 'hunt the cheese'. When not stealing your socks, he is trying to remove your earrings.  He enjoys agility (dog walk and a-frame) and is the fastest mailman in the country. </p>
						 </div>
					</div> <!--kenny popup -->


					<div id="phoebe-popup" class="white-popup mfp-hide">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/team_phoebe.jpg" alt="Phoebe Kavanagh" />
						<div class="content"><h2>Phoebe Kavanagh</h2>
						  <h6>PR Executive, Events Planner</h6>
						  <p>Phoebe is Capra's newest team member.  She enjoys snoozing on your head, cuddling and organizing the company's cheese day.  When not sleeping, she enjoys walking in the forest, chasing after pinecones and making friends with everyone.</p>
						</div>
					</div> <!-- phoebe popup -->

					<div id="ollie-popup" class="white-popup mfp-hide">
						<img src="<?php echo get_bloginfo('template_directory');?>/images/team_ollie.jpg" alt="Ollie Kavanagh" />
						<div class="content"><h2>Ollie Kavanagh</h2>
							  <h6>Designer, coder, problem solver</h6>
							  <p>Ollie can’t decide if he’s a designer or a coder, but you can guarantee anything he’s done will be on a grid and baseline. He also has an unhealthy obsession with trainers and condiments. Ollie works part-time for Capra.</p>
						</div>
					</div> <!-- ollie popup -->

					<a id="kat" class="open-popup-link" href="#kat-popup" ><img src="<?php echo get_bloginfo('template_directory');?>/images/kat-kavanagh.png" alt="Kat Kavanagh" /></a>

					<a id="kenny" class="open-popup-link" href="#kenny-popup" ><img src="<?php echo get_bloginfo('template_directory');?>/images/kenny.png" alt="Kenny" /></a>

					<a id="phoebe" class="open-popup-link" href="#phoebe-popup"><img src="<?php echo get_bloginfo('template_directory');?>/images/phoebe.png" alt="Phoebe" /></a>
					
					<a id="ollie" class="open-popup-link" href="#ollie-popup"><img src="<?php echo get_bloginfo('template_directory');?>/images/ollie-kavanagh.png" alt="Ollie Kavanagh" /></a>
				</div><!-- herd-->
			</div><!-- twelvecol -->
		</div><!-- row -->
	</section> <!-- meadow -->

	<div class="row content">
		<div class="twelvecol about last">
			<h4 class="first">My projects range from the corporate to the playfully gameful. I believe websites should make sense to first-time users and allow them to find information intuitively, without overthinking or needing training. I work hard to reflect our clients’ brand personalities through my designs and am thrilled when they feel as proud of their end product as I do, helping them with everything from branding to coding to testing. </h4>

			<h2>I make websites and games (just not shooting ones)</h2>
			<p><strong>I'm a competitive goat, and that makes me a better game designer.</strong> I was lucky enough to work with <a href="http://natronbaxter.com">Natron Baxter</a> on Jane McGonigal's SuperBetter (for both <a title="SuperBetter" href="<?php bloginfo('url'); ?>/projects/superbetter/">web design</a> and build, as well as <a title="Superbetter Mobile" href="<?php bloginfo('url'); ?>/projects/superbetter-mobile/">iPhone app</a>), a game where you battle bad guys and get power-ups in a quest to get over illness or injury.</p>

			<p>Just as with websites, I like to make sure our interfaces are easy and fun to interact with, whether it's <a title="Dragimals" href="h<?php bloginfo('url'); ?>/dragimals/">for kids</a> or a <a title="Coldclaim" href="<?php bloginfo('url'); ?>/?post_type=soliloquy&amp;p=1051">strategic board game for adults</a>.</p>
				
			

			<h2>I have some really brilliant partners</h2>
			<p><strong>It's true:  for some reason, really really smart, talented people like working with me.</strong>  It is obviously because I'm so fun and talented and beautiful.   My partners are the best in the industry, and every project is richer and more complete because of their great ideas and impeccable implementation. </p>

			<p>I love getting stuck into code with my dev partners and generating the simplest and most effective solutions. I’ve been responsible for implementing my designs right into applications ranging from ruby-on-rails, python, php, unity, .net and java.</p>
			<div class="partners">
				<a href="http://natronbaxter.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/partners/natron-baxter.jpg" alt="Natron Baxter" /></a>
				<a href="http://jacksonmaynard.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/partners/jacksonmaynard.jpg" alt="Jackson Maynard" /></a>
				<a href="http://kickcode.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/partners/kickcode.jpg" alt="kickcode" /></a>
				<a href="http://cutthegreenwire.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/partners/greenwire.jpg" alt="greenwire" /></a>
				<a href="http://evilrockhopper.com"><img src="<?php echo get_bloginfo('template_directory');?>/images/partners/evilrockhopper.jpg" alt="evilrockhopper" /></a>
				<a href="http://jenabirch.co.uk"><img src="<?php echo get_bloginfo('template_directory');?>/images/partners/jena-birch.jpg" alt="jena birch web design" /></a>
			</div>
			<blockquote>
				 Kat's turnaround speed, real-time iteration, and ceaseless dedication to getting something right are unparalleled, and she does it all with a laugh and a smile. She is the perfect mix of right brain, left brain, and extreme charisma. I would work with her again in a heartbeat and wish I could have her on every project.
			</blockquote>
			<cite><a href="http://manojalpa.net/me/">Chelsea Howe</a>, Game Designer</cite>
		

		</div>
	</div><!-- row -->
			

<?php endwhile; ?>

<?php get_footer(); ?>