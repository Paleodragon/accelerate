<?php
/**
 * Template file for the 404 page
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<div id="primary" class="site-content">
  <div id="content" role="main">
    <div class="page-not-found-content">
      <div class="yikes">
        <h2>Yikes! What happened?!</h2>
      </div>
          <div class="surprised">
            <img src="http://localhost:40008/wp-content/uploads/2016/09/animal-surprised-1.png"/>

          </div>
          <div class="dont-panic">
            <h2>It's a... a... <br><span class="page-nf">404: Page Not Found<span></h2>
              <h3>No worries. Everything's under control.</h3>
              <p>Simply hit your back button (Not too hard, though!)<br>
                or click a link from the navigation bar at the top to get back to where you <em>really</em> want to be!<p>
          </div>
      </div>
  </div>
</div>


<?php get_footer();
