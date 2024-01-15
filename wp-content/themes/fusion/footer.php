<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fusion
 */

?>

    <footer class="footer">
      <div class="footer-contact">
        <div class="footer-contact-container">
          <div class="footer-group group">
            <div class="logo">
              <img class="f" src="<?php echo get_template_directory_uri() ; ?>/images/f.png" alt="" width="11" height="18">
            </div>
            <?php if ( is_active_sidebar( 'footer_widget_1' ) ) : 
            dynamic_sidebar( 'footer_widget_1' );
            endif;
            ?>
            <?php if ( is_active_sidebar( 'footer_widget_2' ) ) : 
            dynamic_sidebar( 'footer_widget_2' );
            endif;
            ?>
            <?php if ( is_active_sidebar( 'footer_widget_3' ) ) : 
            dynamic_sidebar( 'footer_widget_3' );
            endif;
            ?>
          </div>
        </div>
      </div>
    </footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
