<?php

/*
 * function that creates template tag function 'case_studies'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

if ( ! function_exists( 'case_studies' ) ) {
  function case_studies() {
    
  $args = array(
    'post_type' => 'case_study',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  );
  
  $case_studies = new WP_Query($args);
  if( $case_studies->have_posts() ): ?>
    <?php while($case_studies->have_posts()): $case_studies->the_post(); ?>
      <?php if ($case_studies->current_post % 2 != 0): ?>

        <!--project-->
        <div class="project">
          <!--image-->
          <div class="image">
            <!--project placeholder-->
            <div class="placeholder <?php echo get_field('placeholder'); ?>">
            </div>
          </div>
          <!--text-->
          <div class="text">
            <!--project heading-->
            <div class="heading">
              <h1><?php the_title(); ?></h1>
              <h3><?php echo get_field('business'); ?></h3>
            </div>
            <!--project description-->
            <div class="description">
              <!--features-->
              <?php
              $tags = get_field('tags');
              if( $tags ): ?>
              <ul>
                  <?php foreach( $tags as $tag ): ?>
                      <li><?php echo $tag; ?></li>
                  <?php endforeach; ?>
              </ul>
              <?php endif; ?>
              <p><?php the_content(); ?></p>
            </div>
            <div class="links">
              <a href="<?php the_permalink(); ?>">View Project</a>
              <a onclick="window.open('<?php echo get_field('github_url'); ?>');">View Code</a>
            </div>
          </div>
        </div>

        <?php else: ?>

        <!--project-->
        <div class="project">
          <!--text-->
          <div class="text">
            <!--project heading-->
            <div class="heading">
              <h1><?php the_title(); ?></h1>
              <h3><?php echo get_field('business'); ?></h3>
            </div>
            <!--project description-->
            <div class="description">
              <!--features-->
              <?php
              $tags = get_field('tags');
              if( $tags ): ?>
              <ul>
                  <?php foreach( $tags as $tag ): ?>
                      <li><?php echo $tag; ?></li>
                  <?php endforeach; ?>
              </ul>
              <?php endif; ?>
              <p><?php the_content(); ?></p>
            </div>
            <div class="links">
              <a href="<?php the_permalink(); ?>">View Project</a>
              <a onclick="window.open('<?php echo get_field('github_url'); ?>');">View Code</a>
            </div>
          </div>
          <!--image-->
          <div class="image">
            <!--project placeholder-->
            <div class="placeholder <?php echo get_field('placeholder'); ?>">
            </div>
          </div>
        </div>

      <?php endif ?>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}

if ( ! function_exists( 'case_studies_other' ) ) {
  function case_studies_other() {
    
  $currentID = get_the_ID(); 
    
    
    
  $args = array(
    'post_type' => 'case_study',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'numberposts' => 1, //how many posts to query from DB
    'posts_per_page' => 1, // how many posts to display per page
    'post__not_in' => array($currentID)
  );
  
  $case_studies = new WP_Query($args);
  if( $case_studies->have_posts() ): ?>
    <?php while($case_studies->have_posts()): $case_studies->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="even">
          <?php the_post_thumbnail( array( 750,500) ); ?>
          <div class="text">
            <h1 data-title="<?php the_title(); ?>"><?php the_title(); ?></h1>
            <h3><?php echo get_field('business'); ?></h3>
            <p><?php echo get_field('format'); ?></p>
          </div>
        </div>
      </a>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}

?>