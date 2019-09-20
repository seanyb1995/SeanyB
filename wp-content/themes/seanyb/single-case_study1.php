<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SeanyB
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--single case studies-->
      <?php 
      if (have_posts()) {
        while (have_posts()) {
              the_post();
              ?>
              <article class="post">
                <p><?php the_content(); ?></p> 
              </article>
          <?php 
        } // end while
      } // end if
      ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
