<?php
/*
Plugin Name: Orbis Twitter
Plugin URI: http://www.orbiswp.com/
Description: The Orbis Twitter plugin extends your Orbis environment with Twitter.

Version: 1.0.0
Requires at least: 3.5

Author: Pronamic
Author URI: http://www.pronamic.eu/

Text Domain: orbis_twitter
Domain Path: /languages/

License: Copyright (c) Pronamic

GitHub URI: https://github.com/pronamic/wp-orbis-twitter
*/

function orbis_twitter_bootstrap() {
	// Classes
	require_once 'classes/orbis-twitter-plugin.php';
	require_once 'classes/orbis-twitter-admin.php';

	// Initialize
	global $orbis_twitter_plugin;

	$orbis_twitter_plugin = new Orbis_Twitter_Plugin( __FILE__ );
}

add_action( 'orbis_bootstrap', 'orbis_twitter_bootstrap' );
