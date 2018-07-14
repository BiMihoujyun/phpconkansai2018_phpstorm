<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase {
	public function test_add() {
		$stack = [];
		$this->assertEquals( 0, count( $stack ) );
	}

}