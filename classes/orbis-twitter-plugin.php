<?php

class Orbis_Twitter_Plugin extends Orbis_Plugin {
	public function __construct( $file ) {
		parent::__construct( $file );

		$this->set_name( 'orbis_twitter' );
		$this->set_db_version( '1.0.0' );

		// Admin
		if ( is_admin() ) {
			$this->admin = new Orbis_Twitter_Admin( $this );
		}
	}

	public function loaded() {
		$this->load_textdomain( 'orbis_twitter', '/languages/' );
	}
}
