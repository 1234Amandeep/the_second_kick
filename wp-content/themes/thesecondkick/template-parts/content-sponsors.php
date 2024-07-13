<!-- ***************** Grabing Content from WP -> (custom_content_setup_menu page) ***************** -->
<?php 
$sponsor_1st = get_option('sponsors_1st');
$sponsor_1st_list = explode(", ", $sponsor_1st);
$sponsor_1st_logo = $sponsor_1st_list[0];
$sponsor_1st_url = $sponsor_1st_list[1];
$sponsor_1st_name = $sponsor_1st_list[2];

$sponsor_2nd = get_option('sponsors_2nd');
$sponsor_2nd_list = explode(", ", $sponsor_2nd);
$sponsor_2nd_logo = $sponsor_2nd_list[0];
$sponsor_2nd_url = $sponsor_2nd_list[1];
$sponsor_2nd_name = $sponsor_2nd_list[2];

$sponsor_3rd = get_option('sponsors_3rd');
$sponsor_3rd_list = explode(", ", $sponsor_3rd);
$sponsor_3rd_logo = $sponsor_3rd_list[0];
$sponsor_3rd_url = $sponsor_3rd_list[1];
$sponsor_3rd_name = $sponsor_3rd_list[2];
?>
<!-- ***************** Got the content ***************** -->

<section class="our-sponsors-container mt-20 mb-20 ">
  <h2 class=" sm:text-5xl  sm:font-black text-3xl font-bold text-center ">Our Sponsors</h2>
  <div class="banners-container container  mt-20 flex justify-center  ">
    <div
      class="sponsor-banner-inner-container w-8/12 flex justify-between flex-col sm:flex-row justify-items-center gap-5 sm:gap-3 md:gap-0">
      <a href="<?php echo $sponsor_1st_url; ?>" target="_blank"
        class="wealth-warriors-banner hover:cursor-pointer flex justify-center"><img
          src="<?php echo $sponsor_1st_logo; ?>" alt="<?php echo $sponsor_1st_name; ?>"></a>
      <a href="<?php echo $sponsor_2nd_url; ?>" target="_blank"
        class="wealth-warriors-banner hover:cursor-pointer flex justify-center"><img
          src="<?php echo $sponsor_2nd_logo; ?>" alt="<?php echo $sponsor_2nd_name; ?>"></a>
      <a href="<?php echo $sponsor_3rd_url; ?>" target="_blank"
        class="wealth-warriors-banner hover:cursor-pointer flex justify-center"><img
          src="<?php echo $sponsor_3rd_logo; ?>" alt="<?php echo $sponsor_3rd_name; ?>"></a>
    </div>
  </div>
</section>