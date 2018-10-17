<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 10/17/18
 * Time: 8:07 AM
 */

// number function
function average($a, $b) {
	return ($a + $b) / 2;
}

echo average(5, 4);
echo "<br><br>";

// string function
function joinString($x, $y) {
	return ($x = $x . $y);
}

$foo = "Here's a string";
$bar = " that I'm concatenating";

echo joinString($foo, $bar);
echo "<br><br>";


//array functions
$testArray = array();

function fillInArray() {
		$fill = array_fill(0, 5, 'Hi George');
		print_r($fill);
		echo "<br><br>";
}

fillInArray();

$anotherTestArray = array(0, 'apple', array("here's", "another", "array"), 'banana');

function anotherArrayFunction($test) {
	print_r(array_values($test));
}


anotherArrayFunction($anotherTestArray);