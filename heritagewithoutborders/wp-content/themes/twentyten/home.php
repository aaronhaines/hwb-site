<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */


get_header(); ?>

		<div id="slideshow">
			<div id="caption" style="width:430px;float:left;padding-left:30px;padding-top:20px">
				<img src="/heritagewithoutborders/wp-content/themes/twentyten/images/caption.png" />
			</div>
			<div id="gallery" style="width:460px;float:right">
			<?php dynamic_content_gallery(); ?>
			</div>
		</div>
		
		<div id="container" style="background-image:none">
			
			<div id="content" role="main">

			<?php get_sidebar( 'homepage' ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
