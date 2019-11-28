<?php
/**
 * The main template file
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
<!--       <svg id="paper">

          <filter id='roughpaper' x='0%' y='0%' width='100%' height="100%">

              <feTurbulence type="fractalNoise" baseFrequency='0.04' result='noise' numOctaves="5" />

              <feDiffuseLighting in='noise' lighting-color='white' surfaceScale='2'>
                  <feDistantLight azimuth='45' elevation='80' />
      </feDiffuseLighting>

      </filter>

          <rect x="0" y="0" width="100%" height="100%" filter="url(#roughpaper)" fill="none">
      </svg> -->
      <!--banner-->
      <section class="banner">
        <!--banner text-->
        <div class="text">
          <!--hello! svg-->
          <img src="wp-content/themes/seanyb/img/svg/hello!.svg"/>
          <?php post_content(5); ?>
          <img src="wp-content/themes/seanyb/img/svg/arrow.svg"/>
          <p>Scroll down to find out more!</p>
        </div>
      </section>
      <!--content-->
      <section name="work" class="content">
        <!--overlay-->
<!--         <div class="load-in"></div>
        <div class="load-out"></div> -->
        <!--projects-->
        <!--projects heading-->
        <div class="work-heading">
          <h3 id="done">Some things I've done.</h3>
        </div>
        <!--case studies content-->
        <div class="projects">
          <?php case_studies(); ?>
        </div>
        <!--about-->
        <!--about heading-->
        <div name="about" class="about-heading">
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
        <!--skill set-->
        <!--skill heading-->
        <div class="skills-heading">
          <h3>Some things I've learnt.</h3>
        </div>
        <!--skills content-->
        <div class="skills">
          <?php skill_set(); ?>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
