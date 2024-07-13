<?php
get_header()
?>

<!-- ********* main-section ********* -->
<main class="   mb-20" id="content">
  <!-- grabing heroku from template-parts/content-heroku -->
  <?php get_template_part( 'template-parts/content', 'heroku' ); ?>

  <!-- grabbing what-we-offer section from template-parts/content-wwo -->
  <?php get_template_part( 'template-parts/content', 'wwo' ); ?>

  <!-- grabbing our-milestones section from template-parts/content-milestones -->
  <?php get_template_part( 'template-parts/content', 'milestones' ); ?>

  <!-- grabbing cta section from template-parts/content-cta -->
  <?php get_template_part( 'template-parts/content', 'cta' ); ?>

  <!-- grabbing our-sponsors section from template-parts/content-sponsors -->




</main>
<!-- ********* main-section ends here ********* -->
<?php
get_footer()
?>