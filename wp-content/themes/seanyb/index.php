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
          <!--hello! svg-->
          <img src="wp-content/themes/seanyb/img/svg/hello!.svg"/>
          <?php post_content(5); ?>
          <img src="wp-content/themes/seanyb/img/svg/arrow.svg"/>
          <p>Scroll down to find out more!</p>
        </div>
      </section>
      <!--content-->
      <section name="work" class="content">
        <div class="transition-wipe overlay"></div>
        <!--projects-->
        <!--projects heading-->
        <div class="work-heading">
          <h3 id="done">Some things I've done.</h3>
        </div>
        <!--top waypoint navigation-->
        <div class="sticky-nav">
          <svg id="uparrow" data-name="uparrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.97 954.82">
            <script type="text/javascript"><![CDATA[
              // Get the position on the page of the SVG
              var svgLocation = document.getElementById("uparrow").getBoundingClientRect();

              // Scroll offset that triggers animation start.
              // In this case it is the bottom of the SVG.
              var offsetToTriggerAnimation = svgLocation.y + svgLocation.height;

              // Function to handle the scroll event.
              // Add an event handler to the document for the "onscroll" event
              function scrollAnimTriggerCheck(evt)
              {
                var viewBottom = window.scrollY + window.innerHeight;
                if (viewBottom > offsetToTriggerAnimation) {
                  // Start the SMIL animation
                  document.getElementById("uphead_mask").style.animation = "arrow 0.6s linear forwards .6s";
                  document.getElementById("upneck_mask").style.animation = "arrow 0.6s linear forwards 1.2s"; 
                  // Remove the event handler so it doesn't trigger again
                  document.removeEventListener("scroll", scrollAnimTriggerCheck);
                }
              }

              // Add an event handler to the document for the "onscroll" event
              document.addEventListener("scroll", scrollAnimTriggerCheck);
            ]]></script>
            <style>
              @keyframes arrow {
                100% {
                  stroke-dashoffset: 0;
                }
              }

              #uphead_mask {
                stroke-dasharray: 1701.536376953125;
                stroke-dashoffset: 1701.536376953125;
              }

              #upneck_mask {
                stroke-dasharray: 1153.90283203125;
                stroke-dashoffset: 1153.90283203125;
              }
            </style>
            <defs>
              <clipPath id="clip-path" transform="translate(-350.51 -28.68)">
                <path id="upneck" d="M490.94,261c3.06,3,1.66,6.87,2.18,10.37.21,1.42-.72,3.72,2.13,3.5,2.25-.18,1.8-2,1.85-3.41.07-2.16,0-4.32,0-6.48,0-1.47.28-2.61,2.15-2.62s2.23,1.09,2.24,2.56q0,7.23.07,14.45c0,9.41,0,18.82,0,28.68,3.78-1.08,3.25-3.67,3.25-5.77,0-9.47-.14-18.93,0-28.4,0-1.69-1.2-4.83,1.5-4.79,2.15,0,1.61,3.24,1.61,5.05,0,8.47-.25,16.94-.37,25.42-.06,5,0,9.94-.07,14.92,0,2.66-.57,5.37.3,7.93,2.06-.09,1.05-1.92,2-2.46.43,1,.85,2,1.28,3,0,16-.14,32,0,48,.24,28.32,1.19,56.64.83,84.95-.44,34.82-1.22,69.65-.09,104.43,1.5,46.26,3.65,92.49,3.75,138.79.08,40.47.57,80.95.82,121.43,0,2,1,5.45-3.45,2.86-1.9-1.1-1.63,1.43-1.93,2.48-1.74,6.23-1.23,12.88-3.62,19-.48,1.23-1.06,2.39-1.54,3.6a3.62,3.62,0,0,1-4.28,2.51c-2.51-.33-2-2.3-2-3.85q-.61-16.73-1.13-33.46a21.21,21.21,0,0,0-1.47-8.32c-2,2.07-1.42,4.53-1.48,6.76-.2,8.16-.19,16.33-.35,24.49a21.07,21.07,0,0,1-.73,5.42c-1,3.33-2,7.06-6.08,2.19-.53-.63-1.23-1.26-2.14-.79-1.11.57-.79,1.75-.8,2.66-.05,7.16,0,14.33,0,21.49,0,5.71,0,5.71-6.21,3.41,0,8.28,0,16.21,0,24.14,0,14.5,0,29,.15,43.49a9.67,9.67,0,0,1-1.94,6.39h-2c-3.38-45.73-1.3-91.55-2.07-137.32-.49-29.15-.37-58.31-1-87.45-1.5-71.8-.48-143.61-1.31-215.4-.59-50.82-.57-101.64-.22-152.45.26-37.65.18-75.3.71-112.94,0-2.91-.77-7.45,2.18-7.92s1.27,4.26,2.42,6.47c.82,1.55.93,3.5,1.21,5.3.26,1.62-.08,4,2.6,1.7,1.49-1.28,2-.22,2.44.89,1.4,3.31,3.53,6.41,3,10.29A32.92,32.92,0,0,0,488,272c.34-1.86.79-3.58.94-5.33C489.07,264.59,487.7,262,490.94,261Z" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-2" transform="translate(-350.51 -28.68)">
                <path id="uphead" d="M478.69,41c.31,6,4,10.66,6.38,15.78,9.63,21,19.34,42.05,29.75,62.7s21.46,41,32.64,61.26c7.76,14.06,15.77,28,24.74,41.36,1.06,1.58,4.42,4.15-.41,6-1.91.72-.86,2.48-.2,3.85,1.76,3.74,3.49,7.54,3.78,11.69.14,2,.48,4.58-2,5.59s-3.65-1-5.14-2.7c-6.09-6.9-10.73-14.86-16.89-22.28-1,3.62,1.27,6,2.68,8.52,3,5.27,6.11,10.46,9.27,15.62,1.77,2.89,1.7,4.58-2.26,4.76-4.16.2-3.09,2.8-1.72,4.82,2.39,3.54,5.09,6.88,7.74,10.23,1.52,1.91,2.74,3.48-.77,4.63-2.88.94-.9,2.46-.11,3.65,6,9.1,13.4,17,21.15,24.67,3.16,3.12,6.3,6.26,9.5,9.34,1,.92,2.21,1.53.92,3.17s-2.26,1.08-3.72.11c-7.21-4.8-12.85-11.29-18.63-17.54-27.57-29.8-49.43-63.61-68.91-99.07-10.5-19.11-20.89-38.27-30.15-58a3.08,3.08,0,0,0-1.64-1.65c-1.33-.29-1.44,1.06-1.8,1.92-10.51,25.12-20.08,50.57-28.47,76.5-7.72,23.83-14.91,47.81-22.14,71.78-1.56,5.18-2,11.06-6.54,15.68-2.26-4.72-.24-9.48-1.52-13.87-2.13.12-.93,2.8-2.73,3.12-3.43-3-2.6-7.14-2.77-11-.05-1.11.73-2.65-1.72-2.5-3.33.2-4.2-1.91-3.5-4.84.31-1.26.93-2.47,1.17-3.74a1.94,1.94,0,0,0-1.65-2.58c-1.52-.24-2.11.6-2.32,1.92a3.35,3.35,0,0,1-.18,1c-1,1.81-.63,5.51-4.14,4.16-3.34-1.29-1.21-4-.74-6.23,1.22-5.86,5-11,4.47-17.41-.09-1.11,1.83-2.25,2.33-3.56.33-.88.77-2.55-.67-3s-2.17.75-2.5,1.89c-1.54,5.35-3,10.72-4.47,16.09-.35,1.27-.71,2.54-1,3.82-.87,3.27-2.57,3.65-5,1.48v-6c5.89-6.57,7.93-14.7,7.71-23.06a31.69,31.69,0,0,1,1.24-10.43c2.78-9,6.45-17.68,8.85-26.73a436.45,436.45,0,0,1,14.84-46.5c12.45-32,27.8-62.56,44.47-92.52C469.73,55.69,474,48.7,476.69,41Z" fill="none"/>
              </clipPath>
            </defs>
            <title>uparrow</title>
            <g id="upneck_mask">
              <g clip-path="url(#clip-path)">
                <line id="upneck2" x1="142.99" y1="177.82" x2="142.99" y2="954.82" fill="none" stroke="#fcc304" stroke-miterlimit="10" stroke-width="60"/>
              </g>
            </g>
            <g id="uphead_mask">
              <g clip-path="url(#clip-path-2)">
                <polyline id="uphead2" points="27.49 286.32 124.49 64.32 265.49 291.32" fill="none" stroke="#fcc304" stroke-miterlimit="10" stroke-width="60"/>
              </g>
            </g>
          </svg>
          <p>Click to scroll up!</p>
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
