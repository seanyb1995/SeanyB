<?php
/**
 * Template Name: Work
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SeanyB
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--banner-->
      <section class="banner">
        <!--banner image-->
        <div class="image">
          <?php
						$post = 0;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>
        </div>
        <!--banner text-->
        <div class="text">
          <?php post_content(5); ?>
        </div>
      </section>
      <!--case studies-->
      <section class="case-studies">
        <!--projects heading-->
        <div class="sub-heading">
          <h3>Some things I've done.</h3>
        </div>
        <!--case studies content-->
        <div class="projects">
          <?php case_studies(); ?>
        </div>
      </section>
      <!--about-->
      <section class="about">
        <!--about heading-->
        <div class="sub-heading">
          <h3>Some things about me.</h3>
        </div>
        <!--about image-->
        <div class="image">
           <?php
						$post = 46;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>
        </div>
        <!--about text-->
        <div class="text">
          <?php post_content(46); ?>
        </div>
      </section>
      <!--skill set-->
      <section class="skill-set">
        <div class="sub-heading">
          <h3>Some things I've learnt.</h3>
        </div>
        <!--skills-->
        <div class="skills">
          <?php skill_set(); ?>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
