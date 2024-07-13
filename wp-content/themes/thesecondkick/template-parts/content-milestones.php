<!-- ***************** Grabing Content from WP -> (custom_content_setup_menu page) ***************** -->
<?php 
$player01_img = get_option('mile_player01_img_url');
$player01 = get_option('mile_player01');

$player01_cred = explode(", ", $player01);
$player01_name = $player01_cred[0];
$player01_age = $player01_cred[1];

$player02_img = get_option('mile_player02_img_url');
$player02 = get_option('mile_player02');

$player02_cred = explode(", ", $player02);
$player02_name = $player02_cred[0];
$player02_age = $player02_cred[1];

$player03_img = get_option('mile_player03_img_url');
$player03 = get_option('mile_player03');

$player03_cred = explode(", ", $player03);
$player03_name = $player03_cred[0];
$player03_age = $player03_cred[1];
?>
<!-- ***************** Got the content ***************** -->

<section class="our-milestones-outer-container mt-20 bg-slate-200 pt-20 pb-20">
  <div class="our-milestones-inner-container container flex flex-col items-center">
    <h2 class=" sm:text-5xl  sm:font-black text-3xl font-bold">Our milestones</h2>
    <div
      class="mile-cards-container  grid md:grid-rows-1 md:grid-cols-3 md:gap-20  md:mt-20 sm:grid-rows-2 sm:grid-cols-2 sm:gap-x-8 gap-y-20  sm:mt-20 grid-rows-3 grid-cols-1 gap-x-8 gap-y-20  md:mt-20 sm:mx-0   sm:pt-0 pt-20 mx-5 sm:mx-0">
      <div
        class="card  flex flex-col items-center p-5 gap-col-0.5 rounded-xl hover:cursor-pointer  border border-primary bg-gray-50 hover:bg-slate-200 hover:shadow-lg hover:shadow-gray-500/50">
        <img src="<?php echo $player01_img;?>" alt="card1-img" width="150" class="">
        <?php dynamic_sidebar(' sidebar-2 ') ?>
        <div class=" player-creds font-semibold">
          <span class="player-name "><?php echo $player01_name; ?>,</span>
          <span class="player-age">U-<?php echo $player01_age ?></span>
        </div>
      </div>
      <div
        class="card  flex flex-col items-center p-5 gap-col-0.5 rounded-xl hover:cursor-pointer  border border-primary bg-gray-50 hover:bg-slate-200 hover:shadow-lg hover:shadow-gray-500/50">
        <img src="<?php echo $player02_img;?>" alt="card1-img" width="150" class="">
        <?php dynamic_sidebar(' sidebar-3 ') ?>
        <div class=" player-creds font-semibold">
          <span class="player-name "><?php echo $player02_name; ?>,</span>
          <span class="player-age">U-<?php echo $player02_age ?></span>
        </div>
      </div>
      <div
        class="card  flex flex-col items-center p-5 gap-col-0.5 rounded-xl hover:cursor-pointer  border border-primary bg-gray-50 hover:bg-slate-200 hover:shadow-lg hover:shadow-gray-500/50">
        <img src="<?php echo $player03_img; ?>" alt="card1-img" width="150" class="">
        <?php dynamic_sidebar(' sidebar-4 ') ?>
        <div class=" player-creds font-semibold">
          <span class="player-name "><?php echo $player03_name; ?>,</span>
          <span class="player-age">U-<?php echo $player03_age ?></span>
        </div>
      </div>

    </div>
  </div>

</section>