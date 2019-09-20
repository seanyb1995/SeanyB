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
                <!--project banner-->
                <div class="project-banner">
                  <?php the_post_thumbnail( array( 960,642) ); ?>
                  <h1><?php the_title(); ?></h1>
                </div>
                <div class="project-indicator">
                  <img src="/wp-content/themes/seanyb/img/svg/sidearrow.svg"/>
                  <p>Click to view website!</p>
                </div>
                <!--project information-->
                <div class="project-information">
                  <!--project overview-->
                  <span>
                    <h3>Project</h3>
                    <p><?php echo get_field('project'); ?></p>
                  </span>
                  <!--project team-->
                  <span>
                    <h3>Team</h3>
                    <p><?php echo get_field('team'); ?></p>
                  </span>
                  <!--project role-->
                  <span>
                    <h3>Role</h3>
                    <p><?php echo get_field('role'); ?></p>
                  </span>
                </div>
                <!--project video render-->
                <div class="project-video">
                  <?php the_post_thumbnail( array( 960,642) ); ?>ß
                </div>
                <!--project process-->
                <div class="project-process">
                  <div class="process">
                    <?php the_post_thumbnail( array( 960,642) ); ?>
                    <br>
                    <h3>Process</h3>
                    <p><?php echo get_field('process'); ?></p>
                  </div>
                </div>
                <!--project screen wireframes-->
                <div class="project-wireframes">
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
                            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 384, 1024); //Resized size to 262px width by 160px height image url
                            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                            $url= $image['url']; //Goto any link when clicked
                            $target= $image['target']; //Open normal or new tab
                            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                  ?>
                  <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                  <figure>
                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                  </figure>
                  <?php if( !empty($url) ){ ?></a><?php } ?>
                  <?php endforeach; endif; ?>
                </div>
                <!--project screen renders-->
                <div class="project-screens">
                 <?php 
                 //Get the images ids from the post_metadata
                    $images = acf_photo_gallery('mock_ups', $post->ID);
                    //Check if return array has anything in it
                    if( count($images) ):
                        //Cool, we got some data so now let's loop over it
                        foreach($images as $image):
                            $id = $image['id']; // The attachment id of the media
                            $title = $image['title']; //The title
                            $caption= $image['caption']; //The caption
                            $full_image_url= $image['full_image_url']; //Full size image url
                            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 1920, 6182); //Resized size to 262px width by 160px height image url
                            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                            $url= $image['url']; //Goto any link when clicked
                            $target= $image['target']; //Open normal or new tab
                            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                  ?>
                  <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                  <figure>
                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                  </figure>
                  <?php if( !empty($url) ){ ?></a><?php } ?>
                  <?php endforeach; endif; ?>
                </div>
                <div class="project-other">
                  <h3>Some other things.</h3>
                  <?php case_studies_other(); ?>
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
