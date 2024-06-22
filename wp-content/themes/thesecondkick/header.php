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

<body>
  <!-- TODO: CREATE A NAVBAR CONTROLLED BY WP -->
  <header class="py-2 bg-gray-50 text-primary">
    <nav class="container flex place-content-between text-xs items-center">
      <!-- branding -->
      <div class="flex">
        <!-- <span>
          <img src="src/assets/resized_logo.jpg" alt="site-logo" srcset="">
        </span> -->
        <p class="text-base font-bold		">
          The Second Kick
        </p>
      </div>
      <!-- navlinks -->
      <ul class="flex gap-x-4 items-center">
        <li class="cursor-pointer">Home</li>
        <li class="cursor-pointer">About Us</li>
        <li class="cursor-pointer">Contact Us</li>
        <li class="cursor-pointer">News & Events</li>
        <li class="bg-primary	text-white px-4 py-2 rounded-lg cursor-pointer">Book a free Trail</li>
      </ul>
    </nav>
  </header>
  <hr class="border-gray-200 border-1">

  <!-- TODO😢
  1. FIGURE OUT THE CORRECT WAY TO ADD FONT-FAMILY OF MULTIPLE WEIGHTS
  2. IMPLEMENT HOVER STATE IN NAVBAR
  3. FIGURE OUT A WAY TO LOAD LOGO AND OTHER LOCAL IMAGES
  4. MAKE IT LOOK AS CLOSE TO DESIGN AS POSSIBLE
  5. MAKE IT DYNAMIC AND CONTOLLED BY WP 
  -->