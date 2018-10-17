<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 10/17/18
 * Time: 8:07 AM
 */
function average($a, $b) {
	return ($a + $b) / 2;
}

echo average(5, 4);
echo "<br><br>";

function joinString($x, $y) {
	return ($x = $x . $y);
}

$foo = "Here's a string";
$bar = " that I'm concatenating";

echo joinString($foo, $bar);
echo "<br><br>";


function fillInArray() {
		$testArray = array_fill(0, 10, 'Hi George');
		print_r($testArray);
		echo "<br><br>";
}

fillInArray();

$anotherTestArray = array(0, 'apple', array(0, 1, 2), 'banana');

function anotherArrayFunction($test) {
	print_r(array_values($test));
}


anotherArrayFunction($anotherTestArray);