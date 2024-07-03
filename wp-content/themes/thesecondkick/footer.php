<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omsai-wp-app-local-theme
 */

?>

<footer id="colophon" class="site-footer py-10 lg:py-14 bg-primary text-white">
  <div class="site-info container grid grid-rows-1 gap-5">
    <div class="footer__row1 flex flex-col lg:flex-row justify-between items-center gap-5 lg:gap-0">
      <div class="branding flex items-center gap-2">
        <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
              echo '<img class="align-middle" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"  width="60" height="60">';
            }            
          ?>
        <a href="#" class=" sm:text-2xl text-lg   sm:ms-1 tracking-wide font-extrabold mt-1"
          tabindex="1"><?php echo bloginfo("name"); ?></a>
      </div>
      <p class="copyright font-semibold tracking-wide text-sm">&copy; 2024 2nd Kick FC</p>
      <div class="social-media-links flex  items-end  gap-3 ">
        <?php if ( get_the_author_meta('threads', 1) ) : ?>
        <a href="https://www.threads.net/<?php the_author_meta('threads', 1); ?>" title="Thread" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/thread.png" width="30" /></a>
        <?php endif; ?>
        <?php if ( get_the_author_meta('facebook', 1) ) : ?>
        <a href="https://www.facebook.com/<?php the_author_meta('facebook', 1); ?>" title="Facebook"
          target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/facebook.png"
            width="30" /></a>
        <?php endif; ?>
        <?php if ( get_the_author_meta('instagram', 1) ) : ?>
        <a href="https://instagram.com/<?php the_author_meta('instagram', 1); ?>" title="Instagram" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/instagram.png" width="30" /></a>
        <?php endif; ?>
        <?php if ( get_the_author_meta('youtube', 1) ) : ?>
        <a href="https://www.youtube.com/<?php the_author_meta('youtube', 1); ?>" title="Youtube" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/youtube.png" width="30" /></a>
        <?php endif; ?>
      </div>
    </div>
    <!-- <div class="footer__row2">row2</div> -->
    <!-- TODO: ADD WIDGET FOR ADDRESS, PHONE NO. AND EMAIL -->
  </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>