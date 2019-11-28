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
                  <h3><?php echo get_field('business'); ?></h3>
                </div>
                <div class="demo">
                  <a href="#">View Demo</a>
                </div>
                <!--divider-->
                <div class="divider"></div>
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
              </div>
                <!--project video render-->
                <div class="project-video">
                  <video src="/wp-content/themes/seanyb/videos/showreel.mkv" type="video/x-matroska;" controls></video>
                </div>
                 <!--project process-->
                <div class="process">
                  <div class="content">
                    <div class="text">
                      <div class="features">
                        <h3>Features</h3>
                        <ul>
                          <li>User Authentication</li>
                          <li>Password Recovery</li>
                          <li>Login Preservation</li>
                          <li>Geolocation</li>
                          <li>Distance Calculator</li>
                          <li>Time Calculator</li>
                        </ul>
                      </div>
                      <div class="challenges">
                        <h3>Challenges</h3>
                        <ol>
                          <li>First time using google maps API, found it difficult initially due to the learning curve.</li>
                          <li>First time developing a web based mobile application, trying to limit the amount of pages to create a more impressive experience without overloading the browser with data.</li>
                          <li>Implementing hand gesture into the design to mimic a native mobile applicaiton.</li>
                        </ol>
                      </div>
                    </div>
                    <div class="image">
                      <!--project plan-->
                      <div class="plan">
                        <!--wireframe-->
                        <div class="wireframe">
                          <h3>Wireframe</h3>
                            <div class="placeholder">
                              <!-- Set up your HTML -->
                              <div class="owl-carousel">
                              <?php
                                //Get the images ids from the post_metadata
                                $images = acf_photo_gallery('wireframes', $post->ID);
                                //Check if return array has anything in it
                                if( count($images) ):
                                    //Cool, we got some data so now let's loop over it
                                    foreach($images as $image):
                                        $id = $image['id']; // The attachment id of the media
                                        $title = $image['title']; //The title
                                        $caption= $image['caption']; //The caption
                                        $full_image_url= $image['full_image_url']; //Full size image url
                                        $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                        $url= $image['url']; //Goto any link when clicked
                                        $target= $image['target']; //Open normal or new tab
                                        $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                        $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                                ?>
                                <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                                  <img class="image-module" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                <?php if( !empty($url) ){ ?></a><?php } ?>
                              <?php endforeach; endif; ?>
                              </div>
                            </div>
                        </div>
                        <div class="mockup">
                          <h3>Mockup</h3>
                          <div class="placeholder">
                            <!-- Set up your HTML -->
                            <div class="owl-carousel">
                            <?php
                              //Get the images ids from the post_metadata
                              $images = acf_photo_gallery('wireframes', $post->ID);
                              //Check if return array has anything in it
                              if( count($images) ):
                                  //Cool, we got some data so now let's loop over it
                                  foreach($images as $image):
                                      $id = $image['id']; // The attachment id of the media
                                      $title = $image['title']; //The title
                                      $caption= $image['caption']; //The caption
                                      $full_image_url= $image['full_image_url']; //Full size image url
                                      $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                      $url= $image['url']; //Goto any link when clicked
                                      $target= $image['target']; //Open normal or new tab
                                      $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                      $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                              ?>
                              <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                              <?php if( !empty($url) ){ ?></a><?php } ?>
                            <?php endforeach; endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="development">
                          <h3>Development</h3>
                          <div class="placeholder">
                            <!-- Set up your HTML -->
                            <div class="owl-carousel">
                            <?php
                              //Get the images ids from the post_metadata
                              $images = acf_photo_gallery('wireframes', $post->ID);
                              //Check if return array has anything in it
                              if( count($images) ):
                                  //Cool, we got some data so now let's loop over it
                                  foreach($images as $image):
                                      $id = $image['id']; // The attachment id of the media
                                      $title = $image['title']; //The title
                                      $caption= $image['caption']; //The caption
                                      $full_image_url= $image['full_image_url']; //Full size image url
                                      $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                      $url= $image['url']; //Goto any link when clicked
                                      $target= $image['target']; //Open normal or new tab
                                      $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                      $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                              ?>
                              <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                                <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                              <?php if( !empty($url) ){ ?></a><?php } ?>
                            <?php endforeach; endif; ?>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                <!--divider-->
                <div class="divider"></div>
                <!--learn-->
                <div class="learn">

                  <h3>Some things I learnt</h3>

                  <!--learnt-->
                  <div class="learnt">

                    <ul>

                      <li><i class="fas fa-tasks"></i><a>Individual Project Management</a></li>
                      <li><i class="fab fa-google"></i><a>Google MAP API</a></li>
                      <li><i class="fas fa-mobile"></i><a>Mobile Application Development</a></li>
                      <li><i class="fas fa-hand-point-up"></i><a>Interactive Design</a></li>

                    </ul>

                  </div>

                </div>
                  
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
