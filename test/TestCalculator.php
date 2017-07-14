<?php
class TestCalculate extends PHPUnit_Framework_TestCase {
	function testAdd() {
		$expected = "2";
		$inputA = 1;
		$inputB = 1;
		$actual = Add($inputA, $inputB);
		
		$this->assertEquals($expected, $actual);
	}
}