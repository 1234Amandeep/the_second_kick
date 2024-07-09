<?php
get_header()
?>

<!-- ********* main-section ********* -->
<main class="   mb-20" id="content">
  <!-- grabing heroku from template-parts/content-heroku -->
  <?php get_template_part( 'template-parts/content', 'heroku' ); ?>

  <!-- grabbing our-milestones section from template-parts/content-milestones -->
  <section class="our-milestones-outer-container mt-20 bg-slate-200 pt-10 pb-20">
    <div class="our-milestones-inner-container container flex flex-col items-center">
      <h1 class=" sm:text-5xl  sm:font-black text-2xl font-bold">Our milestones</h1>
      <div
        class="mile-cards-container  grid md:grid-rows-1 md:grid-cols-3 md:gap-20  md:mt-20 sm:grid-rows-2 sm:grid-cols-2 sm:gap-x-8 gap-y-20  sm:mt-20 grid-rows-3 grid-cols-1 gap-x-8 gap-y-20  md:mt-20 sm:mx-0   sm:pt-0 pt-20 mx-5 sm:mx-0">
        <div
          class="card  flex flex-col items-center p-5 gap-col-0.5 rounded-xl hover:cursor-pointer  border border-primary bg-gray-50 hover:bg-slate-200 hover:shadow-lg hover:shadow-gray-500/50">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/mile/mile1.png" alt="card1-img"
            width="150" class="">
          <ul class="text-sm font-base italic ">
            <li><i class="fa-solid fa-arrow-right"></i> Grassroot Training</li>
            <li><i class="fa-solid fa-arrow-right"></i> Selected - U.P Mandal Team 2024</li>
            <li><i class="fa-solid fa-arrow-right"></i> Khelo India U-17</li>
            <li><i class="fa-solid fa-arrow-right"></i> Ghaziabad District League</li>
          </ul>
          <div class=" player-creds font-semibold">
            <span class="player-name ">Akshay Saini,</span>
            <span class="player-age">U-16</span>
          </div>
        </div>
        <div
          class="card  flex flex-col items-center p-5 gap-col-0.5 rounded-xl hover:cursor-pointer  border border-primary bg-gray-50 hover:bg-slate-200 hover:shadow-lg hover:shadow-gray-500/50">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/mile/mile2.png" alt="card1-img"
            width="150" class="">
          <ul class="text-sm font-base italic ">
            <li><i class="fa-solid fa-arrow-right"></i> Grassroot Training</li>
            <li><i class="fa-solid fa-arrow-right"></i> School National Games U-17</li>
            <li><i class="fa-solid fa-arrow-right"></i> Khelo India U-17</li>
            <li><i class="fa-solid fa-arrow-right"></i> Ghaziabad District League</li>
          </ul>
          <div class=" player-creds font-semibold">
            <span class="player-name ">Akshay Saini,</span>
            <span class="player-age">U-16</span>
          </div>
        </div>
        <div
          class="card  flex flex-col items-center p-5 gap-col-0.5 rounded-xl hover:cursor-pointer  border border-primary bg-gray-50 hover:bg-slate-200 hover:shadow-lg hover:shadow-gray-500/50">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/mile/mile3.png" alt="card1-img"
            width="150" class="">
          <ul class="text-sm font-base italic ">
            <li><i class="fa-solid fa-arrow-right"></i> Grassroot Training</li>
            <li><i class="fa-solid fa-arrow-right"></i> School National Games U-17</li>
            <li><i class="fa-solid fa-arrow-right"></i> Khelo India U-17</li>
            <li><i class="fa-solid fa-arrow-right"></i> Ghaziabad District League</li>
          </ul>
          <div class=" player-creds font-semibold">
            <span class="player-name ">Akshay Saini,</span>
            <span class="player-age">U-16</span>
          </div>
        </div>

      </div>
    </div>

  </section>

</main>
<!-- ********* main-section ends here ********* -->
<?php
get_footer()
?>
<!-- 
<div
          class="card p-4 rounded-xl  backdrop-blur-lg bg-white/70 relative pt-20 hover:cursor-pointer hover:opacity-0">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/mile/mile2.png" alt="card1-img"
            width="150" class="absolute mx-auto left-0 right-0 -top-10 ">
          <div class=" player-attr-list-container my-5">
            <ul class=" font-base italic mx-auto">
              <li><i class="fa-solid fa-arrow-right"></i> Grassroot Training</li>
              <li><i class="fa-solid fa-arrow-right"></i> School National Games U-17</li>
              <li><i class="fa-solid fa-arrow-right"></i> Khelo India U-17</li>
              <li><i class="fa-solid fa-arrow-right"></i> Ghaziabad District League</li>
            </ul>
          </div>
          <div class=" player-creds flex justify-center gap-2">
            <span class="player-name">Akshay Saini</span>
            <span class="player-age">16</span>
          </div>
        </div>
        <div class="card p-4 rounded-xl  backdrop-blur-lg bg-white/70 relative pt-20 hover:cursor-pointer">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/mile/mile3.png" alt="card1-img"
            width="150" class="absolute mx-auto left-0 right-0 -top-10 ">
          <div class=" player-attr-list-container my-5">
            <ul class=" font-base italic mx-auto">
              <li><i class="fa-solid fa-arrow-right"></i> Grassroot Training</li>
              <li><i class="fa-solid fa-arrow-right"></i> School National Games U-17</li>
              <li><i class="fa-solid fa-arrow-right"></i> Khelo India U-17</li>
              <li><i class="fa-solid fa-arrow-right"></i> Ghaziabad District League</li>
            </ul>
          </div>
          <div class=" player-creds flex justify-center gap-2">
            <span class="player-name ">Akshay Saini</span>
            <span class="player-age">16</span>
          </div>
        </div>
        <div class="card p-4 rounded-xl  backdrop-blur-lg bg-white/70 relative pt-20 hover:cursor-pointer">
          <div class="mile-img-container rounded-full">
            <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/mile/mile1.png" alt="card1-img"
              width="140" class="absolute mx-auto left-0 right-0 -top-10 ">
          </div>
          <div class="card-content flex flex-col gap-5">
            <div class=" player-attr-list-container ">
              <ul class=" font-base italic mx-auto">
                <li class=""><i class="fa-solid fa-arrow-right"></i> Grassroot Training</li>
                <li class="text-wrap"><i class="fa-solid fa-arrow-right"></i> Selected for U-15 Uttar Pradesh Mandal
                  2024</li>
                <li><i class="fa-solid fa-arrow-right"></i> Khelo India U-17</li>
                <li><i class="fa-solid fa-arrow-right"></i> Ghaziabad District League</li>
              </ul>
            </div>
            <div class=" player-creds flex justify-center gap-2">
              <span class="player-name">Akshay Saini,</span>
              <span class="player-age">U-16</span>
            </div>
          </div>
        </div> -->