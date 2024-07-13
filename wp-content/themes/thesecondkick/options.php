<?php
// create custom plugin settings menu
add_action('admin_menu', 'custom_content_setup_menu');

function custom_content_setup_menu() {

	//create new top-level menu
	add_menu_page('CONTENT SETUP', 'Content Setup', 'administrator', __FILE__, 'custom_content_page');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}

// src="http://localhost/the_second_kick/wp-content/plugins/opt/lampp/htdocs/the_second_kick/wp-content/themes/thesecondkick/images/icon.png"


function register_mysettings() {
	//register our settings
  // heroku settings
	register_setting( 'thesecondkick-settings-group', 'heroku_headline' );
	register_setting( 'thesecondkick-settings-group', 'heroku_paragraph' );
	register_setting( 'thesecondkick-settings-group', 'heroku_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association1_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association2_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association3_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association4_img_url' );
  // heroku settings ends here
  // milestones settings
	register_setting( 'thesecondkick-settings-group', 'mile_player01_img_url' );
	register_setting( 'thesecondkick-settings-group', 'mile_player01' );
	register_setting( 'thesecondkick-settings-group', 'mile_player02_img_url' );
	register_setting( 'thesecondkick-settings-group', 'mile_player02' );
	register_setting( 'thesecondkick-settings-group', 'mile_player03_img_url' );
	register_setting( 'thesecondkick-settings-group', 'mile_player03' );
  // milestones settings ends here
  // our-sponsors settings
	register_setting( 'thesecondkick-settings-group', 'sponsors_1st' );
	register_setting( 'thesecondkick-settings-group', 'sponsors_2nd' );
	register_setting( 'thesecondkick-settings-group', 'sponsors_3rd' );
  // our-sponsors settings ends here

  
}

function custom_content_page() {
?>
<div class="wrap">
  <h1>Custom Content Setup</h1>

  <form method="post" action="options.php">
    <?php settings_fields( 'thesecondkick-settings-group' ); ?>
    <table class="form-table">
      <!-- heroku section -->
      <tr valign="top">
        <th scope="row">Heroku Headline</th>
        <td><input type="text" name="heroku_headline" value="<?php echo get_option('heroku_headline'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Heroku Paragraph</th>
        <td><input type="text" name="heroku_paragraph" value="<?php echo get_option('heroku_paragraph'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Heroku Image</th>
        <td><input type="text" name="heroku_img_url" value="<?php echo get_option('heroku_img_url'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Heroku Assocaition 1 Image</th>
        <td><input type="text" name="heroku_association1_img_url"
            value="<?php echo get_option('heroku_association1_img_url'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Heroku Assocaition 2 Image</th>
        <td><input type="text" name="heroku_association2_img_url"
            value="<?php echo get_option('heroku_association2_img_url'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Heroku Assocaition 3 Image</th>
        <td><input type="text" name="heroku_association3_img_url"
            value="<?php echo get_option('heroku_association3_img_url'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Heroku Assocaition 4 Image</th>
        <td><input type="text" name="heroku_association4_img_url"
            value="<?php echo get_option('heroku_association4_img_url'); ?>" /></td>
      </tr>
      <!-- heroku section ends here -->
      <!-- Milestones section -->
      <tr valign="top">
        <th scope="row">Mile - Player 1 img</th>
        <td><input type="text" name="mile_player01_img_url"
            value="<?php echo get_option('mile_player01_img_url'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Mile - Player 1 credentials</th>
        <td><input type="text" name="mile_player01" value="<?php echo get_option('mile_player01'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Mile - Player 2 img</th>
        <td><input type="text" name="mile_player02_img_url"
            value="<?php echo get_option('mile_player02_img_url'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Mile - Player 2 credentials</th>
        <td><input type="text" name="mile_player02" value="<?php echo get_option('mile_player02'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Mile - Player 3 img</th>
        <td><input type="text" name="mile_player03_img_url"
            value="<?php echo get_option('mile_player03_img_url'); ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row">Mile - Player 3 credentials</th>
        <td><input type="text" name="mile_player03" value="<?php echo get_option('mile_player03'); ?>" /></td>
      </tr>
      <!-- Milestones section ends here -->
      <tr valign="top">
        <th scope="row">Sponsors 1st</th>
        <td><input type="text" name="sponsors_1st" value="<?php echo get_option('sponsors_1st'); ?>" />
        </td>
      </tr>
      <tr valign="top">
        <th scope="row">Sponsors 2nd</th>
        <td><input type="text" name="sponsors_2nd" value="<?php echo get_option('sponsors_2nd'); ?>" />
        </td>
      </tr>
      <tr valign="top">
        <th scope="row">Sponsors 3rd</th>
        <td><input type="text" name="sponsors_3rd" value="<?php echo get_option('sponsors_3rd'); ?>" />
        </td>
      </tr>
    </table>

    <p class="submit">
      <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

  </form>
</div>
<?php } ?>