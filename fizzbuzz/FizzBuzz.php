<?php
function GenerateNumber($number) {
	for($i=1;$i<=$number;$i++){
		echo CheckNumber($i);
	}
}

function CheckNumber($i) {
	if(($i % 3 == 0) && ($i % 5 == 0)) {
		return displayFizzBuzz();
	} elseif($i % 5 == 0) {
		return displayBuzz();
	} elseif($i % 3 == 0) {
		return displayFizz();
	} else {
		return $i.',';
	}
}

function displayFizz() {
	return 'Fizz,';
}

function displayBuzz() {
	return 'Buzz,';
}

function displayFizzBuzz() {
	return 'FizzBuzz,';
}
echo '<p>';
echo CheckNumber(15);
echo '</p>';
echo '<p>';
echo CheckNumber(3);
echo '</p>';
GenerateNumber(15);