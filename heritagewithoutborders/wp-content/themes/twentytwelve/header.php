<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hwb-styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/webfonts/headline/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/webfonts/body/stylesheet.css" type="text/css" charset="utf-8" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
    <a href="/" class="logo-large">
    	<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Heritage Without Borders">
    </a>
		<div class="share">
			<?php get_search_form( $echo ); ?>
			<div class="social">
      	<?php if ( is_front_page() ) { ?>

				Share on: <span class='st_facebook' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span><span class='st_twitter' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span><span class='st_email' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span><span class='st_sharethis' st_title='Heritage Without Borders' st_url='http://heritagewithoutborders.org/' ></span>
						
				<?php } else { ?>
				Share on: <span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span><span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span><span class='st_email' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span><span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' ></span>
				
			<?php } ?>	
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">