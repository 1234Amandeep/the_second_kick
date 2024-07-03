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
<!-- footer -->
<footer id="colophon" class="site-footer py-10 lg:py-14 bg-primary text-white">
  <!-- footer > content-container -->
  <div class="site-info p-2 container grid grid-rows-1 gap-10">
    <!-- footer > content-container > row1 -->
    <div class="footer__row1 flex flex-col lg:flex-row lg:justify-between lg:items-center gap-5 lg:gap-0">
      <!-- footer > content-container > row1 > branding -->
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
      <!-- footer > content-container > row1 > branding ends here -->
      <!-- footer > content-container > row1 > copyright -->
      <p class="copyright font-semibold tracking-wide text-sm">&copy; 2024 2nd Kick FC</p>
      <!-- footer > content-container > row1 > copyright ends here -->
      <!-- footer > content-container > row1 > social media -->
      <div class="social-media-links flex  items-end  gap-3 ">
        <?php if ( get_the_author_meta('threads', 1) ) : ?>
        <a class="hover:opacity-75 " href="https://www.threads.net/<?php the_author_meta('threads', 1); ?>"
          title="Thread" target="_blank"><img class="hover:size-6"
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/thread.png" width="30" /></a>
        <?php endif; ?>
        <?php if ( get_the_author_meta('facebook', 1) ) : ?>
        <a class="hover:opacity-75" href="https://www.facebook.com/<?php the_author_meta('facebook', 1); ?>"
          title="Facebook" target="_blank"><img class="hover:size-6"
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/facebook.png" width="30" /></a>
        <?php endif; ?>
        <?php if ( get_the_author_meta('instagram', 1) ) : ?>
        <a class="hover:opacity-75" href="https://instagram.com/<?php the_author_meta('instagram', 1); ?>"
          title="Instagram" target="_blank"><img class="hover:size-6"
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/instagram.png" width="30" /></a>
        <?php endif; ?>
        <?php if ( get_the_author_meta('youtube', 1) ) : ?>
        <a class="hover:opacity-75" href="https://www.youtube.com/<?php the_author_meta('youtube', 1); ?>"
          title="Youtube" target="_blank"><img class="hover:size-6"
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/social/youtube.png" width="30" /></a>
        <?php endif; ?>
      </div>
      <!-- footer > content-container > row1 > social media ends here -->
    </div>
    <!-- footer > content-container > row1 ends here -->
    <!-- footer > content-container > row2 -->
    <ul class="footer__row2 flex flex-col text-wrap overflow-hidden gap-5 font-semibold">
      <!-- footer > content-container > row2 > grabing sidebar-1 widget -->
      <?php dynamic_sidebar('sidebar-1'); ?>
      <!-- footer > content-container > row2 > displayed ph. no., email, and location -->
    </ul>
    <!-- footer > content-container > row2 ends here -->
  </div>
  <!-- footer > content-container ends here -->
</footer>
<!-- footer ends here -->
<?php wp_footer(); ?>
</body>

</html>