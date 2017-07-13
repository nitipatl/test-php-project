<?php
include 'FizzBuzz.php';

class TestFizzBuzz extends PHPUnit_Framework_TestCase {
	
	function testConvertOne() {
		$expected = "1,";
		$this->assertEquals($expected, CheckNumber(1));
	}
	
	function testConvertThreeToFizz() {
		$expected = "Fizz,";
		$this->assertEquals($expected, CheckNumber(3));
	}
	
	function testConvertFiveToBuzz() {
		$expected = "Buzz,";
		$this->assertEquals($expected, CheckNumber(5));
	}
	
	function testConvertSixToFizz() {
		$expected = "Fizz,";
		$this->assertEquals($expected, CheckNumber(6));
	}
	
	function testConvertNineToFizz() {
		$expected = "Fizz,";
		$this->assertEquals($expected, CheckNumber(9));
	}
	
	function testConvertTenToBuzz() {
		$expected = "Buzz,";
		$this->assertEquals($expected, CheckNumber(10));
	}
	
	function testConvertTwelveToFizz() {
		$expected = "Fizz,";
		$this->assertEquals($expected, CheckNumber(12));
	}
	
	
	function testConvertFiveteenToFizzBuzz() {
		$expected = "FizzBuzz,";
		$this->assertEquals($expected, CheckNumber(15));
	}
}