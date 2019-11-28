<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SeanyB
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
      <!--quick links-->
      <div class="quick-links">
        <ul>
          <li id="workup"><a href="#">Work</a></li>
          <li id="aboutup"><a href="#">About</a></li>
          <li id="contactup"><a href="#">Contact</a></li>
          <li id="#"><a href="#">Resume</a></li>
        </ul>
      </div>
      <!--disclaimer-->
      <div class="disclaimer">
        <p>Made with love by <strong>Seany.B</strong>. All rights reserved 2019.</p> 
      </div>
      <!--social media-->
      <div class="social-media">
        <ul>
          <li><a onclick="window.open('https://codepen.io/seanyb1995');">Codepen</a></li>
          <li><a onclick="window.open('https://github.com/seanyb1995');">GitHub</a></li>
          <li><a onclick="window.open('https://www.linkedin.com/in/sean-buchanan-b57473191/');">LinkedIn</a></li>
        </ul>
      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
