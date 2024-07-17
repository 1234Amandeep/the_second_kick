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
  <!-- <h2 class="pt-10 sm:text-5xl  sm:font-black text-3xl font-bold text-center ">/h2> -->
  <h2 class="pt-10 sm:text-5xl  sm:font-black text-3xl font-bold text-center mb-10"><?php the_title(); ?></h2>

  <?php the_content(); ?>
  <?php endwhile; // End of the loop. ?>

  <!-- creating team card -->
  <!-- <section class="core-team bg-slate-200 pt-10 pb-10 mb-10">
    <h3 class=" sm:text-3xl  sm:font-bold text-3xl font-bold text-center ">Core Team</h3>
    <div class="core-team-inner-container container flex justify-between pt-10">

      <article class="member-card flex flex-col items-center">
        <div class="member-img">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/contact/G.png" alt="member-pic"
            width="290">
        </div>
        <div class="member-cred flex flex-col items-center">
          <h4 class="member-name">Abhishek Yadav</h4>
          <p class="member-designation">CEO</p>
        </div>

      </article>
      <article class="member-card flex flex-col items-center">
        <div class="member-img">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/contact/G.png" alt="member-pic"
            width="290">
        </div>
        <div class="member-cred flex flex-col items-center">
          <h4 class="member-name">Abhishek Yadav</h4>
          <p class="member-designation">CEO</p>
        </div>

      </article>
    </div>
  </section> -->
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();