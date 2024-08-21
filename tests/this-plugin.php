<?php
/**
 * Test this plugin
 */

class Tests_This_Plugin extends WP_UnitTestCase {
	public function test_inside_wordpress() {
		$this->assertTrue( defined( 'ABSPATH' ) );
	}

	public function test_classes_exist() {
		$this->assertTrue( class_exists( 'WP' ) );
		$this->assertTrue( class_exists( 'WP_Query' ) );
	}
}
