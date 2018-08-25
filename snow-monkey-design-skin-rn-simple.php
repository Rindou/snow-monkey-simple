<?php
/**
 * Plugin name: リンドウ・シンプル
 * Description: 竜胆（りんどう）Webデザインが作成したSnow Monkey用のデザインスキン
 * Version: 0.1.0
 * Text Domain: snow-monkey-design-skin-rn-simple
 *
 * @package snow-monkey-design-skin-rn-simple
 * @author 古川恵子
 * @license GPL-3.0+
 */

use Inc2734\WP_GitHub_Plugin_Updater\GitHub_Plugin_Updater;

add_action( 'plugins_loaded', function() {

	add_filter( 'snow_monkey_design_skin_choices', function( $choices ) {
		$plugin_data = get_file_data( __FILE__, [
			'label' => 'Plugin Name',
		], 'plugin');
		$choices[ basename( __FILE__, '.php' ) ] = $plugin_data['label'];
		return $choices;
	} );
} );

add_action( 'after_setup_theme', function() {
	if ( class_exists( '\Snow_Monkey\app\model\Design_Skin' ) ) {
		new \Snow_Monkey\app\model\Design_Skin( __FILE__ );
	}
} );
