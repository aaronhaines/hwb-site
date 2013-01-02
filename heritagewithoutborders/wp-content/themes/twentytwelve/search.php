<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

  <div class="skip-link assistive-text">
    <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>">
      <?php _e( 'Skip to content', 'twentytwelve' ); ?>
    </a>
  </div>

  <nav class="hwb-nav" role="navigation">
    <div class="dark-yellow-bg nav-title-box"></div>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
  </nav>


	<article class="hwb-article" role="main">


		<?php if ( have_posts() ) : ?>

				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>


		<?php else : ?>

				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->

		<?php endif; ?>

  </article>

  <aside class="hwb-aside">
    <div class="dark-yellow-bg sidebar-title-box">
      <h5>
        PEOPLE HELPING PEOPLE, BECAUSE HERITAGE MATTERS
      </h5>
    </div>
    <?php get_sidebar(); ?>
  </aside>

<?php get_footer(); ?>