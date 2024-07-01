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
	register_setting( 'thesecondkick-settings-group', 'heroku_headline' );
	register_setting( 'thesecondkick-settings-group', 'heroku_paragraph' );
	register_setting( 'thesecondkick-settings-group', 'heroku_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association1_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association2_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association3_img_url' );
	register_setting( 'thesecondkick-settings-group', 'heroku_association4_img_url' );
}

function custom_content_page() {
?>
<div class="wrap">
  <h2>Custom Content Setup</h2>

  <form method="post" action="options.php">
    <?php settings_fields( 'thesecondkick-settings-group' ); ?>
    <table class="form-table">
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
    </table>

    <p class="submit">
      <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

  </form>
</div>
<?php } ?>