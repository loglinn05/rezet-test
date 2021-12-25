<?php

// Outputting an array or any another variable.
function out($value)
{
	echo "<pre>";
	print_r($value);
	echo "</pre>";
}

// Making a multi-dimensional array a one-dimensional array.
function flattenArr($arr)
{
	if(!is_array($arr)) return false;
	$flatArr = [];
	foreach ($arr as $element) {
		if (is_array($element)) {
			$flatArr = array_merge($flatArr, flattenArr($element));
		} else {
			$flatArr[] = $element;
		}
	}
	return $flatArr;
}