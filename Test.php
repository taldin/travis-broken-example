<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,3);
  	}
  	public function testOneMinusOne() {
  		$this->assertEquals(1-1,0);
  	}
}

?>
