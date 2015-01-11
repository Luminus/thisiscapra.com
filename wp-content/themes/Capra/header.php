<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 * We filter the output of wp_title() a bit -- see
		 * twentyten_filter_wp_title() in functions.php.
		 */
		wp_title( '|', true, 'right' );
	
		?>
	</title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
	
	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/1140.css" type="text/css" media="screen" />


	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/magnificent-popup.css"> 
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<!-- Magnific Popup core JS file -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.magnific-popup.js"></script> 

	<!--css3-mediaqueries-js - 
	http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.js"></script>
	

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
<script type="text/javascript">

	$(document).ready(function() {
		$('.open-popup-link').magnificPopup({
		  type:'inline',
		  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		});
	});
</script>

<script type="text/javascript">
	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}
</script>

<!--
	/* @license
	 * MyFonts Webfont Build ID 2611706, 2013-07-29T11:14:14-0400
	 * 
	 * The fonts listed in this notice are subject to the End User License
	 * Agreement(s) entered into by the website owner. All other parties are 
	 * explicitly restricted from using the Licensed Webfonts(s).
	 * 
	 * You may obtain a valid license at the URLs below.
	 * 
	 * Webfont: Minister Light by URW++
	 * URL: http://www.myfonts.com/fonts/urw/minister/t-light/
	 * Copyright: Copyright 2010 URW++ Design &amp; Development Hamburg
	 * Licensed pageviews: 10,000
	 * 
	 * 
	 * License: http://www.myfonts.com/viewlicense?type=web&buildid=2611706
	 * 
	 * © 2013 MyFonts Inc
	*/

-->

</head>

<body <?php body_class(); ?>>

			<div class="container">
	 			<nav id="main-nav">
			    	<ul>
						<li class="about">
							<a href="<?php bloginfo('url') ?>/about" title="about" 
							class="<?php if ( is_page("about")) {?>active<?php } ?>">about</a>
						</li>
						<li class="projects">
							<a href="<?php bloginfo('url') ?>/projects" title="projects" 
							class="<?php if ( is_tree(8)) {?>active<?php } ?>">projects</a>
						</li>
						<li class="home <?php if ( is_front_page()) {?>home-active<?php } ?>">
							
							<a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('template_directory');?>/images/capra.svg" alt="Capra" /></a>
						</li>
						<li class="blog">
							<a href="<?php echo get_settings('home'); ?>/blog" 
							 class="<?php if ( ! is_page()) {?>active<?php } ?>" title="blog">blog</a>
						</li>
			
						<li class="contact">
							<a href="<?php bloginfo('url') ?>/contact" title="contact" 
							class="<?php if ( is_page("contact")) {?>active<?php } ?>">contact</a>
						</li>
					</ul>
				</nav><!-- end main-nav -->

