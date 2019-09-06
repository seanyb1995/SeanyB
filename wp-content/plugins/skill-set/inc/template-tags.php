<?php

/*
 * function that creates template tag function 'case_studies'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

if ( ! function_exists( 'skill_set' ) ) {
  function skill_set() {
    
  $args = array(
    'post_type' => 'skill_set',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  );
  
  $case_studies = new WP_Query($args);
  if( $case_studies->have_posts() ): ?>
    <?php while($case_studies->have_posts()): $case_studies->the_post(); ?>
      <?php if ($case_studies->current_post % 2 != 0): ?>
              <!--even-->
              <div class="even">
                <?php the_post_thumbnail( array( 750,500) ); ?>
                <?php the_content(); ?>
              </div>
          <?php else: ?>
              <!--odd-->
              <div class="odd">
                <?php the_content(); ?>
                <?php the_post_thumbnail( array( 750,500) ); ?>
              </div>
      <?php endif ?>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}
?>