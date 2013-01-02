<?php
/**
 * Template Name: BlogListing
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
<?php
$myposts = get_posts('');
foreach($myposts as $post) :
setup_postdata($post);
?>
  <div>
    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
      <h1 class="headline"><?php the_title(); ?></h1>
    </a>
    <p>
      Posted by <?php the_author(); ?>
    </p>
    <p>
      <?php the_excerpt(); ?>
    </p>
  </div>

<?php endforeach; wp_reset_postdata(); ?>

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