<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.patricelaurent.net
 * @since      1.0.0
 *
 * @package    Tipi
 * @subpackage Tipi/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
    <div class="wrap">
    <h2><?php _e('TIPI Gateway Settings', 'tipi') ?></h2>
        <p><?php _e('Enter your settings here to use the TIPI Gateway', 'tipi') ?></p>
	    <?php settings_errors(); ?>
    <form action='options.php' method='post'>
	    <?php
	    settings_fields( 'tipi_gateway_settings_option_group' );
	    do_settings_sections( 'tipi-gateway-settings-admin' );
	    submit_button();
	    ?>
    </form>
    </div>
<?php