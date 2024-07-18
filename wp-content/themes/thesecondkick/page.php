<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package omsai-wp-app-local-theme
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php while ( have_posts() ) :?>
  <?php the_post();  ?>
  <?php
  if(get_the_title() == "Team") {
    echo "<h2 class='pt-10 sm:text-5xl  sm:font-black text-3xl font-bold text-center mb-10'>Meet Our Team</h2>";
  
  } else {

    echo '<h2 class="pt-10 sm:text-5xl  sm:font-black text-3xl font-bold text-center ">' . get_the_title() . '</h2>';
  }
  ?>
  <?php the_content(); ?>
  <?php endwhile; // End of the loop. ?>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();