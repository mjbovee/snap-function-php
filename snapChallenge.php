<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 10/17/18
 * Time: 8:07 AM
 */

// variables
$foo = "Here's a string";
$bar = " that I'm concatenating";
$anotherTestArray = array(0, 'apple', array("here's", "another", "array"), 'banana');

// number function
function average($a, $b) {
	return ($a + $b) / 2;
}

// string function
function joinString($x, $y) {
	return ($x = $x . $y);
}

//array functions
function fillInArray() {
		$fill = array_fill(0, 5, 'Hi George');
		print_r($fill);
		echo "<br><br>";
}

function anotherArrayFunction(array $test) {
	print_r(array_values($test));
	echo "<br><br>";
}

function yetAnotherArray(array $array) {
	foreach($array as $value) {
		$newArray[] = $value;
	}
	return $newArray;
}

// call everything
echo average(5, 4);
echo "<br><br>";
echo joinString($foo, $bar);
echo "<br><br>";

// calls for array functions
fillInArray();

anotherArrayFunction($anotherTestArray);
$return1 = yetAnotherArray(["hi", "there", "friend"]);
print_r($return1);

echo "<br><br>";
