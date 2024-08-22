<?php
/**
 * Test that emails can be sent.
 */

class Tests_Email extends WP_UnitTestCase {
	public function test_can_send_email() {
		$failure = false;
		$callback = function( $error ) use( &$failure ) {
			$failure = $error;
		};
		add_action( 'wp_mail_failed', $callback );

		wp_mail( 'test@example.org', 'test', 'test' );

		$this->assertNotWPError( $failure );
	}
}
