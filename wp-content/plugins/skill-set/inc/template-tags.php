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
    
  $skill_set = new WP_Query($args);
  if( $skill_set->have_posts() ): ?>
    <?php $i = 0; ?>
    <?php
    if($i == 0) {
    ?><ul><?php
    }
    ?>
    <?php while($skill_set->have_posts()): $skill_set->the_post(); ?>
       <li>
          <!--details-->
          <div class="detail">
            <!--meta-->
            <div class="meta">
              <!--name-->
              <div class="name">
                <!--skill name-->
                <h4><?php echo the_title(); ?></h4>
                <!--experience-->
                <p><?php echo get_field('duration'); ?></p>
              </div>
              <!--percentage-->
              <p><?php echo get_field('percentage'); ?><span>%</span></p>
            </div>
            <!--progress bar-->
            <div class="progress <?php echo get_field('class') ?>"></div>
          </div>
       </li>
       <?php $i++; ?>
        <?php if ($i == 4) {
          ?></ul><?php
          ?><ul><?php
          $i = 0;
        }
        ?>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}
?>