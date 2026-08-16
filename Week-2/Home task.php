<?php

// =====================================================
// STRING FUNCTIONS
// =====================================================

// strlen() - Returns the length of a string
$name = "Nur";
echo strlen($name);
echo "<br>";


// str_word_count() - Counts the number of words in a string
$text = "PHP is easy to learn";
echo str_word_count($text);
echo "<br>";


// str_contains() - Checks if a string contains a specific word or text
$text = "I am learning PHP";
var_dump(str_contains($text, "PHP"));
echo "<br>";


// strpos() - Finds the position of a word or character in a string
$text = "Hello PHP";
echo strpos($text, "PHP");
echo "<br>";


// strtoupper() - Converts a string to uppercase
$text = "hello world";
echo strtoupper($text);
echo "<br>";


// strtolower() - Converts a string to lowercase
$text = "HELLO WORLD";
echo strtolower($text);
echo "<br>";


// str_replace() - Replaces text with another text
$text = "I like Java";
echo str_replace("Java", "PHP", $text);
echo "<br>";


// strrev() - Reverses a string
$text = "Hello";
echo strrev($text);
echo "<br>";


// trim() - Removes spaces from the beginning and end of a string
$text = "   Hello PHP   ";
echo trim($text);
echo "<br>";


// explode() - Converts a string into an array
$text = "Apple,Banana,Mango";
$fruits = explode(",", $text);
print_r($fruits);
echo "<br>";


// implode() - Converts an array into a string
$fruits = array("Apple", "Banana", "Mango");
echo implode(", ", $fruits);
echo "<br>";


// substr() - Returns a part of a string
$text = "Hello World";
echo substr($text, 0, 5);
echo "<br>";


// =====================================================
// NUMBER / DATA TYPE FUNCTIONS
// =====================================================

// is_int() - Checks whether a value is an integer
$num = 10;
var_dump(is_int($num));
echo "<br>";


// is_float() - Checks whether a value is a floating-point number
$num = 10.5;
var_dump(is_float($num));
echo "<br>";


// is_nan() - Checks whether a value is Not a Number
$num = NAN;
var_dump(is_nan($num));
echo "<br>";


// is_numeric() - Checks whether a value is a number or numeric string
$num = "123";
var_dump(is_numeric($num));
echo "<br>";


// round() - Rounds a decimal number to the nearest integer
$num = 10.6;
echo round($num);
echo "<br>";


// =====================================================
// CONSTANT
// =====================================================

// define() - Creates a constant
define("COLLEGE", "AIUB");
echo COLLEGE;
echo "<br>";


// =====================================================
// DATE AND TIME FUNCTIONS
// =====================================================

// date() - Formats the current date and time
echo date("Y-m-d");
echo "<br>";


// strtotime() - Converts a date/time string into a timestamp
$date = strtotime("tomorrow");
echo date("Y-m-d", $date);
echo "<br>";


// time() - Returns the current Unix timestamp
echo time();
echo "<br>";


// date_default_timezone_set() - Sets the default timezone
date_default_timezone_set("Asia/Dhaka");
echo date("Y-m-d H:i:s");
echo "<br>";


// date_default_timezone_get() - Returns the current default timezone
echo date_default_timezone_get();
echo "<br>";


// =====================================================
// INCLUDE AND REQUIRE
// =====================================================

// include - Includes another PHP file
// If the file does not exist, PHP gives a warning and continues.
//
// include "header.php";


// require - Includes another PHP file
// If the file does not exist, PHP gives a fatal error and stops.
//
// require "header.php";


// =====================================================
// JSON FUNCTIONS
// =====================================================

// json_encode() - Converts a PHP array into a JSON string
$student = array(
    "name" => "Nur",
    "age" => 22
);

$json = json_encode($student);
echo $json;
echo "<br>";


// json_decode() - Converts JSON data into a PHP object/array
$json = '{"name":"Nur","age":22}';

$data = json_decode($json);

echo $data->name;
echo "<br>";


// =====================================================
// ARRAY FUNCTIONS
// =====================================================

// array() - Creates an array
$fruits = array("Apple", "Banana", "Mango");

print_r($fruits);
echo "<br>";


// array_keys() - Returns all keys of an array
$student = array(
    "name" => "Nur",
    "age" => 22,
    "department" => "CSE"
);

print_r(array_keys($student));
echo "<br>";


// array_merge() - Combines two or more arrays
$array1 = array("Apple", "Banana");
$array2 = array("Mango", "Orange");

$result = array_merge($array1, $array2);

print_r($result);
echo "<br>";


// array_push() - Adds one or more elements to the end of an array
$fruits = array("Apple", "Banana");

array_push($fruits, "Mango");

print_r($fruits);
echo "<br>";


// array_reverse() - Reverses the order of an array
$fruits = array("Apple", "Banana", "Mango");

print_r(array_reverse($fruits));
echo "<br>";


// sizeof() - Returns the number of elements in an array
$fruits = array("Apple", "Banana", "Mango");

echo sizeof($fruits);
echo "<br>";


// count() - Returns the number of elements in an array
$fruits = array("Apple", "Banana", "Mango");

echo count($fruits);
echo "<br>";


// sort() - Sorts an array in ascending order
$numbers = array(50, 20, 40, 10, 30);

sort($numbers);

print_r($numbers);
echo "<br>";

?>