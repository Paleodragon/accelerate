<?php
/**
 * The template for the Case Studies Archive
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
      $image_1 = get_field("image_1");
      $size = "large";
      $services = get_field("services");
      $client = get_field("client");
      $link = get_field("site_link");
      ?>

      <article class="case-study">
        
        <aside class="case-study-sidebar">
          <a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2></a>
          <h5><?php echo $services; ?></h5>
            <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>"><p><strong>View Project ></strong></p></a>
        </aside>

          <div class="case-study-images">
            <a href="<?php the_permalink(); ?>">
              <?php if($image_1) { ?>
              <?php echo wp_get_attachment_image( $image_1, $size ); ?>
              <?php } ?>
            </a>
          </div>

      </article>

		<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
