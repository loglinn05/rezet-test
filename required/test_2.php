<?php

/**
 * Determine the length of a row.
 * Is used for picking up a 3 * 3
 * matrix part and serves as the
 * max offset later.
 */
function rowLength($arr)
{
	return count($arr[0]);
}

/**
 * Picking up a 3 * 3 matrix part.
 * $arr is the matrix itself,
 * $offset - the index of the first
 * column of this little matrix.
 */
function pickUp($arr, $offset = 0)
{
	if (
		($offset < (rowLength($arr) - 2))
		&&
		($offset >= 0)
	) {
		$matrix = [];
		for ($i = 0; $i < 3; $i++) {
			for ($j = $offset; $j < ($offset + 3); $j++) {
				$matrix[$i][] = $arr[$i][$j];
			}
		}
		return $matrix;
	} elseif($offset > (rowLength($arr) - 3)) {
		die("<p>The offset is too big for this array.</p>");
	} else {
		die("<p>The offset is illegal.</p>");
	}
}

/**
 * Checking if a 3 * 3 matrix part contains
 * all the digits from 1 to 9.
 */
function containsAllDigits($arr)
{
	$arr = flattenArr($arr);
	$uniqueDigits = array_unique($arr);
	if (count($uniqueDigits) == 9) {
		return true;
	} else {
		return false;
	}
}

/**
 * Checking if every 3 * 3 matrix part
 * contains all the digits from 1 to 9.
 */
function checkIfContains($arr)
{
	$result = [];
	for ($i = 0; $i < (rowLength($arr) - 2); $i++) {
		$result[] = containsAllDigits(pickUp($arr, $i));
	}
	return $result;
}