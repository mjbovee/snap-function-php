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
echo "<br>";

function joinString($x, $y) {
	return ($x = $x . $y);
}

$foo = "Here's a string";
$bar = " that I'm concatenating";

echo joinString($foo, $bar);
echo "<br>";


function fillInArray() {
		$testArray = array_fill(0, 10, 'Hi George');
		print_r($testArray);
}

fillInArray();