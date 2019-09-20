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
    <?php $i = 1; ?>
    <?php while($case_studies->have_posts()): $case_studies->the_post(); ?>
      <?php if ($case_studies->current_post % 2 != 0): ?>
              <!--even-->
                <div class="even">
                  <h3>0<?php echo $i ?></h3>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( array( 750,500) ); ?>
                    <h1 data-title="<?php the_title(); ?>"><?php the_title(); ?></h1>
                    <h3><?php echo get_field('business'); ?></h3>
                    <p><?php echo get_field('format'); ?></p>
                  </a>
                </div>
          <?php $i++; ?>
          <?php else: ?>
              <!--odd-->
              <div class="odd">
                <h3>0<?php echo $i ?></h3>
                  <a href="<?php the_permalink(); ?>">
                  <h1 data-title="<?php the_title(); ?>"><?php the_title(); ?></h1>
                  <h3><?php echo get_field('business'); ?></h3>
                  <p><?php echo get_field('format'); ?></p>
                  <?php the_post_thumbnail( array( 750,500) ); ?>
                </a>
              </div>
      <?php $i++; ?>
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