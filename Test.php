<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
  	public function testOneMinusOne() {
  		$this->assertEquals(1-1,0);
  	}
}

?>
