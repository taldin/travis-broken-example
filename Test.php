<?php
let testa=require('./test_a.js');
class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
  	public function testOneMinusOne() {
  		$this->assertEquals(1-1,0);
  	}
  	
  	public function testa() {
  		$this->assertEquals(test_a.test(1),1);
  	}
}

?>
