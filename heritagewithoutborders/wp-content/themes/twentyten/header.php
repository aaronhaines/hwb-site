<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19718490-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">

	<div id="header">
		<div id="masthead">
			<div id="headerright"> 

	<?php if ( is_front_page() ) { ?>
					<div id="headershare">
	Share on: <span class='st_facebook' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span><span class='st_twitter' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span><span class='st_email' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span><span class='st_sharethis' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span>
				</div>	
	<?php } else { ?>
<div id="headershare">
	Share on: <span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span><span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span><span class='st_email' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span><span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span>
				</div>
	<?php } ?>	

<div id="headerdonatenow">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="57M98MLVJ6K5S">
<input type="image" src="http://heritagewithoutborders.org/heritagewithoutborders/wp-content/uploads/2011/11/HWB_Donate_button.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
			
			</div>

			<div id="logo">
				<a href="http://www.heritagewithoutborders.org"><img src="/heritagewithoutborders/wp-content/uploads/2010/11/HWB_logo_RGB_72dpi.png" width="307" height="108" border="0" /></a>	
			</div>
			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				
								<div id="headersearch">
					<form action="http://heritagewithoutborders.org/" id="searchform" method="get" role="search">
						
							<label for="s" class="screen-reader-text">Search for:</label>
							<input type="text" id="s" name="s" value="Search" onfocus="if (this.value == 'Search') {this.value = ''; }" onblur="if (this.value == ''){this.value = 'Search'; }" value="Search" style="border:1px solid #D9D9D9">
							<input type="submit" value="" id="searchsubmit">
						
					</form>
				</div>
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main" <?php if ( is_front_page() ) echo ' class="homepage"'; ?>>
