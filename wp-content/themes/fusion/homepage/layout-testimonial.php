<div class="testimonials">

        <div class="testimonial-wrapper">
          <div class="testimonial-heading">
            <div class="line-4"></div>
            <p class="testimonials-2">Testimonials</p>
            <p class="testimonial-text">We have worked with some amazing companies around the world</p>
          </div>
          <div class="company-logos group">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/1.png" alt="" width="152" height="25">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/2.png" alt="" width="71" height="44">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/3.png" alt="" width="92" height="28">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/4.png" alt="" width="68" height="42">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/5.png" alt="" width="116" height="30">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/6.png" alt="" width="84" height="59">
            <img src="<?php echo get_template_directory_uri() ; ?>/images/7.png" alt="" width="76" height="24">
          </div>
          <?php
$testimonial_args = array(
  'post_type'=>'testimonial', 
  'posts_per_page' => -1,
);
$testimonial_query = new WP_Query( $testimonial_args );
if( $testimonial_query->have_posts() ) {
  ?>
<div class="feedbacks group testimonial-carousel">
          <div class="testimonial-carousel-inner">
          <?php
        while( $testimonial_query->have_posts() ):
          $testimonial_query->the_post();
          ?>
            <div class="single-feedback testimonial-carousel-item">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <div class="feedback-image"><img src="<?php echo $image[0] ; ?>" /></div>
            <?php endif; ?>
              <p class="feedback-text"><?php echo $post->post_content ?></p>
              <div class="feedback-wrapper">
                <div class="feedback-line"></div>
                <div class="feedback-name">
                  <?php the_title(); ?>
                </div>
              </div>
              <?php
              $designation = get_post_meta( $post->ID, 'designation', true );
              ?>
              <p class="feedback-designation"><?php echo $designation; ?></p>
            </div>
            <?php 
        endwhile;
?>
            <div class="single-feedback testimonial-carousel-item">
              <div class="feedback-image"></div>
              <p class="feedback-text">“Lorem ipsum”</p>
              <div class="feedback-wrapper">
                <div class="feedback-line"></div>
                <div class="feedback-name">
                  Anthony Watkins
                </div>
              </div>
              <p class="feedback-designation">VP of Product, VISA</p>
            </div>
            </div>
<div class="testimonial-carousel-controls">
    <span class="prev"></span>
    <span class="next"></span>
  </div>
  <div class="testimonial-carousel-indicators"></div>
        </div>
          </div>
        </div>

</div>
<?php } ?>