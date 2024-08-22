<?php
/**
 * Test that emails can be sent.
 */

class Tests_Email extends WP_UnitTestCase {
	public function test_can_send_email() {
		$before = did_action( 'wp_mail_failed' );

		wp_mail( 'test@example.org', 'test', 'test' );

		$after = did_action( 'wp_mail_failed' );

		$this->assertEquals( $before, $after );
	}
}
