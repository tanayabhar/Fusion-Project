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
 * @package Fusion
 */

get_header();
?>

<div class="main-content-wrapper">
      <div class="services">
        <div class="active">
          <div class="service-heading-container">
            <div class="line"></div>
            <p class="service-heading">Our services</p>
            <p class="service-tagline">Our team will take your business presence to new level</p>
          </div>
          <div class="services-wrapper match-height group">
            <div class="single-service">
              <img class="i" src="<?php echo get_template_directory_uri() ; ?>/images/i.png" alt="" width="19" height="21">
              <p class="service-title">Strategy.</p>
              <p class="service-desc">Ship it user story iterate engaging co-working intuitive pitch deck hacker prototype SpaceTeam user centered design big data.</p>
              <div class="service-link group">
                <img class="service-details" src="<?php echo get_template_directory_uri() ; ?>/images/image_25.png" alt="" width="13" height="8">
                <p class="service-details-text">See Details</p>
              </div>
            </div>
            <div class="single-service group">
              <img class="k" src="<?php echo get_template_directory_uri() ; ?>/images/k.png" alt="" width="21" height="21">
              <p class="service-title">Branding.</p>
              <p class="service-desc">Ship it user story iterate engaging co-working intuitive pitch deck hacker prototype SpaceTeam user centered design big data.</p>
              <div class="service-link group">
                <img class="service-details" src="<?php echo get_template_directory_uri() ; ?>/images/image_26.png" alt="" width="12" height="8">
                <p class="service-details-text">See Details</p>
              </div>
            </div>
            <div class="single-service group">
              <img class="layer-4" src="<?php echo get_template_directory_uri() ; ?>/images/image_28.png" alt="" width="16" height="21">
              <p class="service-title">Design.</p>
              <p class="service-desc">Ship it user story iterate engaging co-working intuitive pitch deck hacker prototype SpaceTeam user centered design big data.</p>
              <div class="service-link group">
                <img class="service-details" src="<?php echo get_template_directory_uri() ; ?>/images/image_25.png" alt="" width="13" height="8">
                <p class="service-details-text">See Details</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part( 'homepage/layout', 'project' ); ?>
      <?php get_template_part( 'homepage/layout', 'testimonial' ); ?>
      <?php get_template_part( 'homepage/layout', 'team' ); ?>
	  <div class="contact-us">
		  <div class="heading-6">
            <div class="line-9"></div>
            <p class="text-36">Contact us</p>
            <p class="text-37">Let’s talk about the project</p>
          </div>
          <div class="contact-form">
            <div class="row group">
              <div class="col-3">
                <div class="input-active">
                  <p class="text-38">Your Name</p>
                  <p class="text-39">Benjamin Silva</p>
                  <div class="shape"></div>
                </div>
                <div class="input">
                  <p class="company">company</p>
                  <div class="shape-2"></div>
                </div>
              </div>
              <div class="col-4">
                <div class="input-2">
                  <p class="text-40">Your Email</p>
                  <div class="shape-3"></div>
                </div>
                <div class="input-3">
                  <p class="subject">Subject</p>
                  <div class="shape-4"></div>
                </div>
              </div>
            </div>
            <div class="input-4 group">
              <p class="text-41">Your message</p>
              <div class="shape-5"></div>
            </div>
            <div class="button">
              <div class="text-42 group">
                <img class="text-44" src="<?php echo get_template_directory_uri() ; ?>/images/image.png" alt="$" width="18" height="11" title="$">
                <p class="text-43">get in touch</p>
              </div>
            </div>
          </div>
	  </div>
</div>

<?php
get_footer();
