<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<?php comments_template( '', true ); ?>
		<?php endwhile; // end of the loop. ?>
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