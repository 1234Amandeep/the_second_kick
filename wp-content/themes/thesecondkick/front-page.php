<?php
get_header()
?>

<!-- ***************** Grabing Content from WP -> (custom_content_setup_menu page) ***************** -->

<?php 

$heroku_headline = get_option('heroku_headline');
$heroku_paragraph = get_option('heroku_paragraph');
$heroku_img_url = get_option('heroku_img_url');
$heroku_association1_img_url = get_option('heroku_association1_img_url');
$heroku_association2_img_url = get_option('heroku_association2_img_url');
$heroku_association3_img_url = get_option('heroku_association3_img_url');
$heroku_association4_img_url = get_option('heroku_association4_img_url');

?>


<!-- ***************** Got the content ***************** -->


<!-- heroku section -->
<!-- {navbar[12]}[5%] -->
<!-- {text[4]  ----- space[1] ----- img[7]}[60%] -->
<!-- {space[1-0]---- assocs[8-12] ----space[1-0]}[35%] -->
<!-- heroku section -->

<main class="container   mb-20" id="content">
  <div class="heroku-container lg:mt-20 md:mt-10 sm:mt-5 grid  gap-5  sm:gap-[96px]">
    <!-- grid-rows-2 use it to make two colms-->

    <div
      class="heroku-container__row1-container flex flex-col lg:flex-row lg:gap-col md:gap-col-0.5 justify-between items-center bg-gradient-to-tr from-grad-red-0 to-grad-red-100 sm:bg-none text-white sm:text-primary py-8 sm:py-0 ">

      <div class="order-1 lg:order-2 lg:w-8/12 md:w-full tagline-img-container flex justify-end hidden sm:block">
        <img src="<?php echo $heroku_img_url; ?>" alt="district-league-team-photo" class="rounded-lg">
      </div>
      <div class="order-2 lg:order-1 lg:w-4/12 md:w-8/12 m-3  tagline-container flex   flex-col md:gap-3 gap-2 ">
        <h1 class="sm:text-5xl text-center  lg:text-left text-3xl tracking-wide  lg:tracking-tight font-semibold">
          <?php echo $heroku_headline; ?></h1>
        <p class=" tracking-wide text-xs text-justify lg:text-left lg:text-sm  leading-5 mb-2">
          <?php echo $heroku_paragraph; ?>
        </p>
        <div class="btn-container flex justify-center lg:justify-start">
          <button tabindex="6"
            class="bg-primary hover:bg-primary-700	text-white px-4 py-2 rounded-lg cursor-pointer text-xs md:text-sm lg:text-base font-normal "><i
              class="fa-solid fa-play me-1"></i> Know
            more
          </button>
        </div>
      </div>
    </div>
    <!-- https://www.firstkickschoolofsoccer.com/wp-content/uploads/2023/05/fkss-logo-93x93.png -->
    <!-- <div class="heroku-container__row2-container flex items-end justify-center items-center">
      <div
        class="association-container lg:w-6/12 w-8/12 sm:width-full  flex sm:flex-row flex-col gap-5 lg:gap-[96px] items-center">
        <div class=" flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/aiff_logo.png"
            alt="district-league-team-photo">
        </div>
        <div class="  flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/ghaziabad_fa_logo.jpg"
            alt="district-league-team-photo">
        </div>
        <div class="  flex items-center">
          <img src="https://www.firstkickschoolofsoccer.com/wp-content/uploads/2023/05/fkss-logo-93x93.png"
            alt="district-league-team-photo">
        </div>
        <div class="  flex items-center">
          <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo_upfs.jpg">
        </div>
      </div> -->
    <div class="heroku-container__row2-container flex items-end justify-center items-center">
      <div class="association-container w-8/12 sm:w-9/12 flex sm:flex-row flex-col gap-5 lg:gap-[96px] items-center">
        <div class="w-6/12 lg:w-8/12  flex items-center cursor-pointer">
          <img src="<?php echo $heroku_association1_img_url; ?>" alt="district-league-team-photo">
        </div>
        <div class="w-6/12 lg:w-8/12  flex items-center cursor-pointer">
          <img src="<?php echo $heroku_association2_img_url ?>" alt="district-league-team-photo">
        </div>
        <div class="w-6/12 lg:w-8/12  flex items-center cursor-pointer">
          <img src="<?php echo $heroku_association3_img_url ?>" alt="district-league-team-photo">
        </div>
        <div class="w-6/12 lg:w-8/12  flex items-center cursor-pointer">
          <img src="<?php echo $heroku_association4_img_url ?>">
        </div>
      </div>

    </div>


  </div>

</main>

<!-- 
<div class="w-full h-[100px] flex items-center"><img
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/aiff_logo.png"
            alt="district-league-team-photo" height="100"></div>
        <div class="w-full h-[100px] flex items-center"><img
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/ghaziabad_fa_logo.jpg" height="100">
        </div>
        <div class="w-full h-[100px] flex items-center"><img
            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo_upfs.jpg" height="100">
        </div>
        <div class="w-full h-[100px] flex items-center"><img
            src="https://www.firstkickschoolofsoccer.com/wp-content/uploads/2023/05/fkss-logo-93x93.png" height="100">
        </div> -->













<?php
get_footer()
?>