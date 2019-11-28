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
              <!--individual project content-->
              <section class="content">
             <!--single case study banner-->
              <div class="banner">
                <!--project placeholder-->
                <div class="placeholder">
                  <img src="https://www.stickpng.com/assets/images/5cb0633d80f2cf201a4c3253.png" alt="project image">
                </div>
                <!--project heading-->
                <div class="heading">
                  <h1><?php the_title(); ?></h1>
                </div>
                <!--project description-->
                <div class="description">
                  <!--project overview-->
                  <div class="overview">
                    <div class="title">
                      <div class="start">
                        <h3>Project</h3>
                      </div>
                      <div class="end">
                        <ul>
                          <li><a href="#">GitHub</a></li>
                        </ul>
                      </div>
                    </div>
                    <p><?php echo the_field('project'); ?></p>
                  </div>
                  <!--project team-->
                  <div class="team">
                    <h3>Team</h3>
                    <p><?php echo the_field('team'); ?></p>
                  </div>
                  <!--project role-->
                  <div class="role">
                    <h3>Role</h3>
                    <?php
                    $roles = get_field('roles');
                    if( $roles ): ?>
                    <ul>
                        <?php foreach( $roles as $role ): ?>
                            <li><?php echo $role; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                  </div>
                </div>
                <!--divider-->
                <div class="divider"></div>
                <!--project goals-->
                <div class="whathow">
                  <!--project goals-->
                  <div class="goals">
                    <h3>Goals</h3>
                    <ol>
                      <li><?php echo get_field('goal_1'); ?></li>
                      <li><?php echo get_field('goal_2'); ?></li>                      
                      <li><?php echo get_field('goal_3'); ?></li>
                      <li><?php echo get_field('goal_4'); ?></li>
                    </ol>
                  </div>
                  <!--project tools-->
                  <div class="tools">
                    <h3>Tools</h3>
                    <div class="list">
                    <?php
                    $tools = get_field('tools');
                    if( $tools ): ?>
                    <ul>
                        <?php foreach( $tools as $tool ): ?>
                            <li class="<?php echo $tool; ?>"><?php echo $tool; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    </div>
                  </div>
                </div>
                <!--divider-->
                <div class="divider"></div>
              </div>
                <!--project video render-->
                <div class="project-video">
                  <video src="/wp-content/themes/seanyb/videos/showreel.mkv" type="video/x-matroska;" controls></video>
                </div>
                <!--project process-->
                <div class="project-process">
                    <div class="process">
                  </div>
                </div>
                <!--project screen wireframes-->
                <div class="project-wireframes">
                </div>
                <!--project screen renders-->
                <div class="project-screens">
                </div>
                <div class="project-other">
                  <h3>Some other things.</h3>
                </div>
              </section>
          <?php 
        } // end while
      } // end if
      ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
