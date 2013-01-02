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
    <h1 class="headline">BECAUSE HERITAGE <span class="dark-yellow">MATTERS.</span></h1>
    <p>Heritage Without Borders is a unique social enterprise working in developing countries to: build capacity in heritage skills; support heritage projects in situations of poverty, and following conflict and disaster; and provide valuable work experience for students and professionals in the heritage sector.</p>
    <div class="video-embed">
      <iframe width="460" height="300" src="http://www.youtube.com/embed/v5MwSvwlMPY" frameborder="0" allowfullscreen></iframe>
    </div>
    <p>
      We form long-term partnerships with governmental and non-governmental organisations to understand knowledge and skill gaps. Our teams of volunteers support and work alongside local communities to understand, interpret, use and conserve their tangible and intangible heritage.  Find out more about volunteering or partnering with us.
    </p>
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