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
        <!--banner text-->
        <div class="text">
          <!--hello! svg-->
          <svg id="Hello_" data-name="Hello!" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 315.7 136.23">
            <defs>
              <clipPath id="clip-path" transform="translate(-26.96 -32.1)">
                <path id="_" data-name="!" d="M306.8,144.8q0-2.09,3-4a31.31,31.31,0,0,1,2.88-1.68,4.58,4.58,0,0,1,2.08-.56,10.36,10.36,0,0,1,5,2.24,7,7,0,0,1,2.8,4.95,1.64,1.64,0,0,0,.08.57,1.84,1.84,0,0,1,.08.56,7.49,7.49,0,0,1-1,3.76c-.64,1.11-1.39,1.68-2.24,1.68a4,4,0,0,0-1.6.72,2.81,2.81,0,0,1-1.6.55Q308.08,150.56,306.8,144.8Zm12.64-11.36q-8.16-1.6-8.64-8c-.11-1.18-.16-2.3-.16-3.36v-3.36a131.53,131.53,0,0,1,1.2-16.89,193.4,193.4,0,0,1,3.76-19.91q3.67-16.32,5.6-25.28t2.24-11.2a3.4,3.4,0,0,1,1.68-2.4,5.65,5.65,0,0,1,3-.8,8.42,8.42,0,0,1,1.76.32l5.44,1.6c1.92.85,2.88,2.08,2.88,3.67q-1,11.69-8.16,40.65-5.76,23.52-5.76,39v2.4a3.18,3.18,0,0,1-1.36,2.4,4.42,4.42,0,0,1-2.8,1.12Z" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-2" transform="translate(-26.96 -32.1)">
                <path id="o" d="M265.52,143.51a8.28,8.28,0,0,1-4.88-1.51c-1.44-1-3-2-4.56-3a21.85,21.85,0,0,1-8.16-8A23.87,23.87,0,0,1,245,118.88a36,36,0,0,1,1.2-8.4q1.2-4.89,2.16-9a23.1,23.1,0,0,1,2.24-4.88,34.69,34.69,0,0,1,4.4-6.08,30.82,30.82,0,0,1,6-5.2A12.21,12.21,0,0,1,267.92,83a5.09,5.09,0,0,1,2.88,1,27.23,27.23,0,0,0,4.64,2.4c1.6.64,3.22,1.28,4.88,1.91s3.28,1.34,4.88,2.09a19.64,19.64,0,0,1,4.48,2.88,9.8,9.8,0,0,1,2.72,3.52c.64,1.38,1.28,2.72,1.92,4a9.35,9.35,0,0,1,1,3.28c.1,1.12.16,2.26.16,3.44v3a25.16,25.16,0,0,1-2,9.2A60,60,0,0,1,289,128q-1.29,2.07-3.36,4.8a43,43,0,0,1-4.64,5.12,32.07,32.07,0,0,1-5.36,4.08,10.92,10.92,0,0,1-5.68,1.67,16.25,16.25,0,0,1-1.68-.08c-.59-.05-1.2-.08-1.84-.08Zm15.68-38.23q0-4.65-3.36-6.72a13.7,13.7,0,0,0-7.36-2.08A7,7,0,0,0,265,99,22.42,22.42,0,0,0,261.2,105a32.76,32.76,0,0,0-2.32,7.68,41.65,41.65,0,0,0-.72,7.11c0,.43.08,1.29.24,2.57a23.32,23.32,0,0,0,.88,4,11.88,11.88,0,0,0,1.84,3.68,3.74,3.74,0,0,0,3.12,1.6,8.85,8.85,0,0,0,3.2-.56c1-.38,2-.83,3.2-1.36a15.81,15.81,0,0,0,4.48-4.32,26.33,26.33,0,0,0,3.12-5.92,45,45,0,0,0,1.92-6.72c.48-2.35.82-4.59,1-6.72Z" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-3" transform="translate(-26.96 -32.1)">
                <path id="l" d="M235.92,140.8a1.41,1.41,0,0,0,.16.64,1.35,1.35,0,0,1,.16.64,4,4,0,0,1-2.16,3.75,8.88,8.88,0,0,1-4.4,1.21q-4,0-6.4-4.4a38.54,38.54,0,0,1-3.68-10.24,81.09,81.09,0,0,1-1.68-11.6q-.4-5.76-.4-8.64,0-7.84-.08-14t-.08-12.88a164.05,164.05,0,0,1,.88-17.2,167.29,167.29,0,0,0,.88-17.52,5.45,5.45,0,0,1,1-3.36,14,14,0,0,1,2.56-2.56c.85,0,1.89,0,3.12.16a11.69,11.69,0,0,1,3.44.8,8,8,0,0,1,2.72,1.75A4.34,4.34,0,0,1,233,50.56a45.57,45.57,0,0,1-.8,8.4,45.38,45.38,0,0,0-.8,8.39q0,6.09-.08,11c-.06,3.26-.08,6.49-.08,9.69q0,4.16.16,7.92c.1,2.5.16,5,.16,7.6,0,1.81,0,3.54.08,5.2s.08,3.22.08,4.72a80.17,80.17,0,0,0,1.36,13.92Q234.49,135,235.92,140.8Z" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-4" transform="translate(-26.96 -32.1)">
                <path id="l-2" data-name="l" d="M203.76,140.8a1.41,1.41,0,0,0,.16.64,1.35,1.35,0,0,1,.16.64,4,4,0,0,1-2.16,3.75,8.85,8.85,0,0,1-4.4,1.21q-4,0-6.4-4.4a38.54,38.54,0,0,1-3.68-10.24,81.09,81.09,0,0,1-1.68-11.6c-.26-3.84-.4-6.72-.4-8.64q0-7.84-.08-14t-.08-12.88a166.81,166.81,0,0,1,.88-17.2A167.29,167.29,0,0,0,187,50.56a5.45,5.45,0,0,1,1-3.36,14.37,14.37,0,0,1,2.56-2.56c.85,0,1.9,0,3.12.16a11.62,11.62,0,0,1,3.44.8,7.87,7.87,0,0,1,2.72,1.75,4.34,4.34,0,0,1,1.12,3.21,45.57,45.57,0,0,1-.8,8.4,45.38,45.38,0,0,0-.8,8.39q0,6.09-.08,11T199.12,88q0,4.16.16,7.92c.11,2.5.16,5,.16,7.6,0,1.81,0,3.54.08,5.2s.08,3.22.08,4.72A81.16,81.16,0,0,0,201,127.36Q202.33,135,203.76,140.8Z" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-5" transform="translate(-26.96 -32.1)">
                <path id="e" d="M131.76,116a48.53,48.53,0,0,1,1.52-11.92,37.38,37.38,0,0,1,4.56-10.8,25.59,25.59,0,0,1,7.52-7.76,18.4,18.4,0,0,1,10.4-3A19.13,19.13,0,0,1,163,83.83a15.64,15.64,0,0,1,5.2,3.37,13.6,13.6,0,0,1,3.12,4.72,14.79,14.79,0,0,1,1,5.52,19.36,19.36,0,0,1-5.28,13.28,19.39,19.39,0,0,1-6.32,4.4,22.7,22.7,0,0,1-8.56,1.84,14,14,0,0,1-3.68-.16c-1.06-.22-2.29-.54-3.68-1a7.8,7.8,0,0,0-.16,1.37v.88a21.63,21.63,0,0,0,1.92,9.28,16,16,0,0,0,3.84,5,10.63,10.63,0,0,0,4,2.16A13.54,13.54,0,0,0,157,135a14.29,14.29,0,0,0,8.24-2.24l7.28-5,1.76.73a4.13,4.13,0,0,1,1.76,1.52c.11.64.22,1.14.32,1.52a6.38,6.38,0,0,1,.16,1.68,7.38,7.38,0,0,1-1.2,3.76,13.81,13.81,0,0,1-2.32,2.64,22,22,0,0,1-7.76,4.56,34.8,34.8,0,0,1-9.36,1,23.15,23.15,0,0,1-6.32-1.11,40.56,40.56,0,0,1-6.32-2.4,30,30,0,0,1-6-5.76,24.43,24.43,0,0,1-3.36-6.08,28.36,28.36,0,0,1-1.6-6.64C132.06,121,131.87,118.56,131.76,116Zm13.92-8.64a13.73,13.73,0,0,0,2,.24c.91.05,1.63.08,2.16.08q5.44,0,8.4-2.72a8.58,8.58,0,0,0,3-6.56,7.29,7.29,0,0,0-1.28-4.16,4,4,0,0,0-3.52-1.93,14.76,14.76,0,0,0-3.12.33,3.45,3.45,0,0,0-2.32,1.6,17.25,17.25,0,0,1-1.44,1.59A8.87,8.87,0,0,0,148,98.08a22.69,22.69,0,0,0-1.36,3.6A31.37,31.37,0,0,0,145.68,107.36Z" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-6" transform="translate(-26.96 -32.1)">
                <path id="h" d="M100.56,109.92a18.13,18.13,0,0,1-2.48-.24l-3.2-.48-3.2-.48a15.9,15.9,0,0,0-2.16-.24,15.68,15.68,0,0,0-4.64.64,111,111,0,0,0-3,15.6q-1.2,9.36-1.52,21.84a16.12,16.12,0,0,1-4.16.79,14.6,14.6,0,0,1-3-.31,6.61,6.61,0,0,1-2.8-1.37,8.39,8.39,0,0,1-2.16-2.79,10.54,10.54,0,0,1-.88-4.64,28.46,28.46,0,0,1,.24-3.28,27.79,27.79,0,0,0,.24-2.8q0-1.77.48-6.16c.32-2.94.7-6.38,1.12-10.32s.94-8.24,1.52-12.88,1.1-9.26,1.52-13.84.8-8.91,1.12-13,.48-7.47.48-10.24V63.83a2,2,0,0,1,1.76-2.23,15.53,15.53,0,0,1,2.56-.32l4.8,1.28a4.59,4.59,0,0,1,2.32,1.68A8.94,8.94,0,0,1,87,67.12a18.25,18.25,0,0,1,.64,3.6c.11,1.28.16,2.5.16,3.68a32.54,32.54,0,0,1-.32,3.84q-.31,2.55-.64,5.52t-.64,5.92a48.84,48.84,0,0,0-.32,5c0,1.92.75,3.11,2.24,3.59a22.32,22.32,0,0,0,6.56.73h1.92a34.39,34.39,0,0,0,3.52-.16,20.44,20.44,0,0,1,2.08-.16h.64q2.08-8.64,3.76-19.28t3.28-24.24q.81-5.45,3.36-5.6h1.44a12.48,12.48,0,0,1,5,.88,4,4,0,0,1,2.48,2.64c-.1,2.56-.4,6.1-.88,10.64s-1,9.59-1.68,15.2-1.3,11.49-2,17.68-1.36,12.18-2,18-1.14,11.22-1.52,16.24-.56,9.12-.56,12.32c0,1.7,0,3.33.08,4.88s.14,3.06.24,4.56a3.77,3.77,0,0,1-.72,2.16,2.15,2.15,0,0,1-1.84,1q-6.39,0-8.88-3.59t-2.48-10.48c0-.64,0-1.5.08-2.56s.11-2.22.16-3.44.11-2.38.16-3.44.08-1.92.08-2.56c0-.86.08-2.19.24-4s.35-3.74.56-5.76.4-4,.56-5.84.24-3.28.24-4.24Z" fill="none"/>
              </clipPath>
            </defs>
            <title>hello!</title>
            <g id="__mask" data-name="!_mask">
              <g clip-path="url(#clip-path)">
                <polyline points="283.54 105.4 287.54 115.4 292.54 125.4" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="17"/>
                <polyline points="307.54 2.4 302.54 19.4 298.54 35.4 295.54 52.4 292.54 70.4 290.54 85.4 290.54 99.4 290.54 102.4" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="17"/>
              </g>
            </g>
            <g id="o_mask">
              <g clip-path="url(#clip-path-2)">
                <path d="M260.5,94.5s-7,7-8,12a54.37,54.37,0,0,0,0,18c1,5,3,7,8,11a13.05,13.05,0,0,0,10,3s6-2,9-5,6-9,7-12,1-10,1-15-5-13-5-13-9-4-13-3-14,6-14,6" transform="translate(-26.96 -32.1)" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="17"/>
              </g>
            </g>
            <g id="l2_mask">
              <g clip-path="url(#clip-path-3)">
                <polyline points="199.54 2.4 198.54 22.4 196.54 48.4 196.54 72.4 198.54 93.4 202.54 109.4 207.54 121.4" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="17"/>
              </g>
            </g>
            <g id="l_mask">
              <g clip-path="url(#clip-path-4)">
                <polyline points="167.54 1.4 166.54 24.4 164.54 53.4 164.54 70.4 164.54 83.4 168.54 101.4 171.54 111.4 177.54 121.4" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="17"/>
              </g>
            </g>
            <g id="e_mask">
              <g clip-path="url(#clip-path-5)">
                <path d="M127.5,104.5s7,5,12,6,9,2,12,2,6-2,10-4,5-8,5-10-1-9-5-11-8-3-12,0a72.81,72.81,0,0,0-7,6,29.54,29.54,0,0,0-3,6c-1,3-2,8-2,8l2,14s2,10,3,12,2,3,7,5,4,2,8,2,6-1,9-2,4-3,6-5a73.65,73.65,0,0,1,6-5" transform="translate(-26.96 -32.1)" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="17"/>
              </g>
            </g>
            <g id="h_mask">
              <g clip-path="url(#clip-path-6)">
                <path d="M80.5,49.5v22s-1,22-2,27-2,7-3,16-2,19-2,21-1,14,0,16-15,7-15,7l-22-27,9-27,13-2h9s23,2,29,2h17l13-5,13-34-13-23h-8l-4,16-2,23s-4,29-4,34-1,21-1,23,1,15,1,15l1,10" transform="translate(-26.96 -32.1)" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="17"/>
              </g>
            </g>
          </svg>
          <?php post_content(5); ?>
          <svg id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 114.08 392.03">
            <defs>
              <clipPath id="clip-path" transform="translate(-41.45 -3.24)">
                <path id="Head" d="M53,297H68.37l-1-3.05c9-.95,12.89,6,17,11,7.23,8.84,13.32,18.59,19.48,27.38,3-9.11,6.09-18.91,9.31-28.7,1-3,7.48-7.3,11.3-7.25l-2.22,10,.66.26c.83-1.87,1.33-4,2.62-5.5,1-1.17,3-1.49,5.74-2.67,1.57-1.81,4.55-4.44,6.5-7.68s3.13-7.38,5.3-10.77Q126.52,336,110,392h-1a13.48,13.48,0,0,0-.59-2.81C93.69,356.51,77,325,53,298Z" fill="none"/>
              </clipPath>
              <clipPath id="clip-path-2" transform="translate(-41.45 -3.24)">
                <path id="Neck" d="M95.05,42.71c.45,6.14.87,11.89,1.29,17.63l.58,0c.39-5.08.79-10.16,1.21-15.49l3.72.62a4.36,4.36,0,0,0,.46-1.09c.55-10,5.46-19.39,3.42-29.7a15.06,15.06,0,0,1,1.07-8.57c2.21,94.59,4.23,189.16,2.54,285l-12.06-18-.84,4.4c-2.48-1.38-2.46-1.37-2.3-7.79a25.5,25.5,0,0,0-1-8.88V275.4l-1.33.17a27.24,27.24,0,0,1-.8-4.14c-.55-13.91-1.29-27.81-1.49-41.73-.36-25.64-.23-51.29-.62-76.94-.47-31.29-1.51-62.59-1.67-93.88,0-5.05,3.24-10.13,5.13-15.14C92.56,43.26,93.77,43.18,95.05,42.71Z" fill="none"/>
              </clipPath>
            </defs>
            <title>arrow</title>
            <g id="head_mask">
              <g clip-path="url(#clip-path)">
                <polyline id="Head1" points="14.05 283.26 63.05 355.26 92.05 277.26 98.05 260.26" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="34"/>
              </g>
            </g>
            <g id="neck_mask">
              <g clip-path="url(#clip-path-2)">
                <line id="Neck1" x1="53.05" y1="0.26" x2="59.05" y2="290.26" fill="none" stroke="#ffc300" stroke-miterlimit="10" stroke-width="25"/>
              </g>
            </g>
          </svg>
        </div>
      </section>
      <!--content-->
      <section name="work" class="content">
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
          <h1>Sean Buchanan</h1>
          <div class="wrap">
              <blockquote>With a great party shirt comes great responsibility.</blockquote>
              <p>I'm an Australian full stack website developer living in Perth.</p>
              <p>I studied at <a onclick="window.open('https://www.curtin.edu.au/');" >Curtin University</a>, and I'm currently working as a freelance designer.</p>
              <p>My passion is full stack/back-end development, but I like to dabble in a bit of everything.</p>
              <p>In my spare time when I'm not working I'm streaming video games on <a onclick="window.open('https://www.twitch.tv/seanyb1995');" >Twitch</a>.</p>
          </div>
          <!--resume-->
          <div class="resume">
            <p>Here's my <a href="#" id="resume">resume</a> .</p>
          </div>
        </div>
        <!--contact-->
        <div class="contact">
          <!--contact heading-->
          <div name="contact" class="heading">
            <h3>Something more personal</h3>
          </div>
          <!--contact details-->
          <div class="details">
            <!--contact form-->
            <div class="form">
              <div class="sub-heading">
                <h1>Get in touch with me</h1>
              </div>
              <form>
                <!--name-->
                <div class="input">
                  <input type="text" id="" class="" name="" required>
                  <label>Name (required)*</label>
                </div>
                <!--Email-->
                <div class="input">
                  <input type="text" id="" class="" name="" required>
                  <label>Email (required)*</label>
                </div>
                <!--Message-->
                <div class="input">
                  <input type="text" id="" class="" name=""required>
                  <label>Message</label>
                </div>
                <!--submit-->
                <div class="submit">
                  <button>Send</button>
                </div>
              </form>
            </div>
            <!--contact links-->
            <div class="links">
              <!--sub heading-->
              <div class="sub-heading">
                <h1>Connect with me</h1>
              </div>
              <!--connect with me-->
              <div class="social">
                <ul>
                  <li><a href="<?php echo get_field('codepen_url'); ?>">Codepen</a></li>
                  <li><a href="<?php echo get_field('github_url'); ?>">GitHub</a></li>
                  <li><a href="<?php echo get_field('linkedin_url'); ?>">LinkedIn</a></li>
                </ul>
              </div>
              <!--email me-->
              <div class="personal-email">
                <p>Work enquiries or if you just want to say hello, email me at<br> <a>sean.buchanan@creative.design</a></p>
              </div>
            </div>
          </div>
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
