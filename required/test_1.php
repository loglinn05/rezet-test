<?php
/**
 * It's a function that cheks if three
 * numbers(a, b, c) satisfy the first
 * condition (a > b < c).
 */
function cond1($a, $b, $c)
{
	return ($a > $b) && ($b < $c);
}

/**
 * It's a function that cheks if three
 * numbers(a, b, c) satisfy the second
 * condition (a < b > c).
 */
function cond2($a, $b, $c)
{
	return ($a < $b) && ($b > $c);
}

/**
 * Checking if a number group consisting
 * of three elements of an array fulfills
 * all the conditions.
 */
function checkCondFulfill($arr)
{
	$result = [];
	for ($i = 0; $i < (count($arr) - 2); $i++) {
		if(
			cond1($arr[$i], $arr[$i + 1], $arr[$i + 2])
			||
			cond2($arr[$i], $arr[$i + 1], $arr[$i + 2])
		) {
			$result[$i] = 1;
		} else {
			$result[$i] = 0;
		}
	}
	return $result;
}