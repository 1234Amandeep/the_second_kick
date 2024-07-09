<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omsai-wp-app-local-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body class="font-nunito text-primary">
  <!-- header -->
  <header class="bg-gray-50 text-primary sticky top-0">
    <!-- navbar -->
    <nav class="container text-sm">

      <div class="row-1 flex justify-between items-center px-1 sm:px-0">
        <!-- nav-branding -->
        <div class="branding flex items-center cursor-pointer">
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
        <!-- nav-branding ends here -->
        <!-- nav-links-toggler -->
        <span id="menu-toggler-open" class="icon lg:hidden ">
          <i tabindex="2" class=" cursor-pointer focus:text-primary-700 text-primary text-2xl fa-solid fa-bars"></i>
        </span>
        <span id="menu-toggler-close" class="icon hidden lg:hidden">
          <i tabindex="2" class="cursor-pointer focus:text-primary-700 text-primary text-2xl fa-solid fa-xmark"></i>
        </span>
        <!-- nav-links-toggler ends here -->
        <!-- nav-links expanded -->
        <?php
          $defaults = array(
            'theme_location'  => 'header-menu',
            
            'container_class' => 'block hidden lg:block',
            'menu_class'      => 'flex gap-x-4 items-center mt-1 text-primary-700',
            'li_atts_0'       => [
              'tabindex' => "2"
            ],
            'li_class'        => ['hover___bg-slate-200', 'px-2', 'py-2', 'cursor-pointer', 'focus___text-primary'],
            'a_class' => "text-primary",
            );
          wp_nav_menu(
          $defaults
          );
        ?>
      </div>
      <!-- nav-links expanded ends here -->
      <!-- nav-links contrac -->
      <div class="row-2 text-xs">
        <?php
          $defaults = array(
            'theme_location'  => 'header-menu',
            'container_id'    => 'nav-links-expanded',
            'container_class' => 'text-xs hidden lg:hidden',
            'menu_class'      => 'p-2',
            'li_atts_0'       => [
              'tabindex' => "2"
            ],
            'li_class'        => ['hover___bg-slate-200', 'px-2', 'py-2', 'cursor-pointer', 'hover___text-primary', 'focus___text-primary'],
            'a_class_0' => "text-primary",
            );
          wp_nav_menu(
          $defaults
          );
        ?>
      </div>
      <!-- nav-links contr ends here -->
    </nav>
    <!-- navbar ends here -->
  </header>
  <hr class="border-gray-200 border-1">
  <!-- header ends here -->









  <!-- TODO😢
  1. FIGURE OUT THE CORRECT WAY TO ADD FONT-FAMILY OF MULTIPLE WEIGHTS ✅
  2. FIGURE OUT A WAY TO LOAD LOGO AND OTHER LOCAL IMAGES ✅
  3. SETUP WHOLE COLOUR FONT-SIZE/WEIGHT SYSTEM IN TAILWIND.CONFIG FILE ✅
  4. IMPLEMENT HOVER STATE IN NAVBAR ✅
  5. FIGURE OUT WHY ITS NOT TAKING UP FULL NAV CONTAINER :30 ✅
  6. MAKE IT LOOK AS CLOSE TO DESIGN AS POSSIBLE ✅
  7. :104 ACTING WEIRED GETTING SPACES AROUND IT WHEN INSERTED INPLACE OF NAV-LINKS :49 ✅
  8. MAKE IT RESPONSIVE, DYNAMIC AND CONTOLLED BY WP ✅
  -->