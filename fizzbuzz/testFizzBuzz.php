<?php
include ("FizzBuzz.php");

class testFizzBuzz extends PHPUnit_Framework_TestCase {

	function testInput1Return1() {
		$expected = "1";
		$input = "1";
		 
		$actual = GetNumber($input);
		
		$this->assertEquals($expected, $actual);
	}
	
	function testInput2Return2() {
		$expected = "2";
		$input = "2";
		
		$actual = GetNumber($input);
		
		$this->assertEquals($expected, $actual);
	}

	function testInput3ReturnFizz() {
		$expected = "FIZZ";
		$input = "3";
		
		$actual = GetNumber($input);
		
		$this->assertEquals($expected, $actual);
	}
	function testInput5ReturnBuzz() {
		$expected = "BUZZ";
		$input = "5";
		
		$actual = GetNumber($input);
		
		$this->assertEquals($expected, $actual);
	}
	function testInput15ReturnFizzBuzz() {
		$expected = "FIZZBUZZ0000";
		$input = "15";
		
		$actual = GetNumber($input);
		
		$this->assertEquals($expected, $actual);
	}
}