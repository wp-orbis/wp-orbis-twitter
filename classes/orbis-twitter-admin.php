<?php

/**
 * Title: Orbis Twitter admin
 * Description:
 * Copyright: Copyright (c) 2005 - 2014
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Orbis_Twitter_Admin {
	/**
	 * Plugin
	 *
	 * @var Orbis_Twitter_Plugin
	 */
	private $plugin;

	//////////////////////////////////////////////////

	/**
	 * Constructs and initialize an Orbis core admin
	 *
	 * @param Orbis_Plugin $plugin
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;

		// Actions
		add_action( 'admin_init', array( $this, 'admin_init' ) );
	}

	//////////////////////////////////////////////////

	/**
	 * Admin initalize
	 */
	public function admin_init() {
		add_settings_section(
			'orbis_twitter',
			__( 'Twitter', 'orbis_twitter' ),
			array( $this, 'section_twitter' ),
			'orbis'
		);

		add_settings_field(
			'orbis_twitter_consumer_key',
			_x( 'Consumer Key', 'twitter', 'orbis_twitter' ),
			array( $this, 'input_text' ),
			'orbis',
			'orbis_twitter',
			array( 'label_for' => 'orbis_twitter_consumer_key' )
		);

		add_settings_field(
			'orbis_twitter_consumer_secret',
			_x( 'Consumer Secret', 'twitter', 'orbis_twitter' ),
			array( $this, 'input_text' ),
			'orbis',
			'orbis_twitter',
			array( 'label_for' => 'orbis_twitter_consumer_secret' )
		);

		add_settings_field(
			'orbis_twitter_access_token',
			_x( 'Access Token', 'twitter', 'orbis_twitter' ),
			array( $this, 'input_text' ),
			'orbis',
			'orbis_twitter',
			array( 'label_for' => 'orbis_twitter_access_token' )
		);

		add_settings_field(
			'orbis_twitter_access_token_secret',
			_x( 'Access Token Secret', 'twitter', 'orbis_twitter' ),
			array( $this, 'input_text' ),
			'orbis',
			'orbis_twitter',
			array( 'label_for' => 'orbis_twitter_access_token_secret' )
		);

		register_setting( 'orbis', 'orbis_twitter_consumer_key' );
		register_setting( 'orbis', 'orbis_twitter_consumer_secret' );
		register_setting( 'orbis', 'orbis_twitter_access_token' );
		register_setting( 'orbis', 'orbis_twitter_access_token_secret' );
	}

	//////////////////////////////////////////////////

	/**
	 * Section Twitter
	 */
	public function section_twitter() {
		printf(
			__( 'Get your Twitter access token from %s.', 'orbis_twitter' ),
			sprintf(
				'<a href="%s" target="_blank">%s</a>',
				esc_attr( 'https://apps.twitter.com/' ),
				esc_html( 'https://apps.twitter.com/' )
			)
		);
	}

	/**
	 * Input text
	 *
	 * @param array $args
	 */
	public function input_text( $args = array() ) {
		printf(
			'<input name="%s" id="%s" type="text" value="%s" class="%s" />',
			esc_attr( $args['label_for'] ),
			esc_attr( $args['label_for'] ),
			esc_attr( get_option( $args['label_for'] ) ),
			'regular-text code'
		);

		if ( isset( $args['description'] ) ) {
			printf(
				'<p class="description">%s</p>',
				$args['description']
			);
		}
	}
}
