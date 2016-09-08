<?php
/**
 * The template for displaying the About page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="home-page">
	<div class="site-content">
		<!--<?php while ( have_posts() ) : the_post(); ?>-->
			<div class='homepage-hero'>
      <h3><?php the_content(); ?></h3>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
<div id="primary" class="site-content">
  <div id="content" role="main">
    <div class="about-content">
    <?php while ( have_posts() ) : the_post();
    $image_1 = get_field("image_1");
    $image_2 = get_field("image_2");
    $image_3 = get_field("image_3");
    $image_4 = get_field("image_4");
    $size = "large";
    $services = get_field("services");
    ?>
    <div class="our-services">
      <h2><?php the_field("services", 47353) ?></h2>
      <p><?php the_field("description", 47353) ?></p>
    </div>
    <div class="field-one">
      <div class="image-odd">
        <figure><?php echo wp_get_attachment_image($image_1, $size); ?></figure>
      </div>
      <div class="description-odd">
        <h2><?php the_field("content_strategy", 47353) ?></h2>
        <p><?php the_field("strategy_description", 47353) ?></p>
      </div>
    </div>

    <div class="field-two">
      <div class="image-even">
        <figure><?php echo wp_get_attachment_image($image_2, $size); ?></figure>
      </div>
      <div class="description-even">
        <h2><?php the_field("influencer_mapping", 47353) ?></h2>
        <p><?php the_field("mapping_description", 47353) ?></p>
      </div>
    </div>

    <div class="field-three">
      <div class="image-odd">
        <figure><?php echo wp_get_attachment_image($image_3, $size); ?></figure>
      </div>
      <div class="description-odd">
        <h2><?php the_field("social_media_strategy", 47353) ?></h2>
        <p><?php the_field("social_media_description", 47353) ?></p>
      </div>
    </div>

    <div class="field-four">
      <div class="image-even">
        <figure><?php echo wp_get_attachment_image($image_4, $size); ?></figure>
      </div>
      <div class="description-even">
        <h2><?php the_field("design_and_development", 47353) ?></h2>
        <p><?php the_field("d_and_d_description", 47353) ?></p>
      </div>
    </div>
<?php endwhile; // end of the loop. ?>
  </div>
  </div><!-- #content -->
</div><!-- #primary -->
  <div class="contact-section">
    <hr>
    <aside class="about-contact-us">
      <h2>Interested in working with us?</h2>
    </aside>
    <div class="btn-contact-us">
      <button>Contact Us</button>
    </div>
  </div>
	</div><!-- #primary -->
<?php get_footer(); ?>
