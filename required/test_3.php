<?php

/**
 * Formatting a string the length
 * of which is less than 16.
 */
function formatStr($str, $str_align)
{
	$fill = "";
	for ($i = 0; $i < (16 - strlen($str)); $i++) {
		$fill .= "&nbsp;";
	}
	if ($str_align == "LEFT") {
		$str = "*" . $str . $fill . "*";
	} elseif ($str_align == "RIGHT") {
		$str = "*" . $fill . $str . "*";
	} else {
		$str = "*" . $str . $fill . "*";
	}
	return $str;
}

/**
 * Formatting strings of any length.
 */
function formatStrOfAnyLen($arr, $str_align = "LEFT")
{
	$str = implode(" ", $arr);
	if (strlen($str) <= 16) {
		$str = formatStr($str, $str_align);
	} else {
		$chunks = [];
		$i = 0;
		$chunks[$i] = "";
		foreach ($arr as $key => $value) {
			if (
				(strlen($chunks[$i]) <= 16)
				&&
				(strlen($chunks[$i] . " " . $value) <= 16)
			) {
				if ($key != 0) {
					$chunks[$i] .= " " . $value;
				} else {
					$chunks[$i] .= $value;
				}
			} else {
				$i++;
				$chunks[$i] = $value;
			}
		}
		for ($i = 0; $i < count($chunks); $i++) {
			$chunks[$i] = formatStr($chunks[$i], $str_align);
		}
		$str = $chunks;
	}
	return $str;
}

// Formatting a text that is an array of arrays of words.
function formatText($strings, $str_aligns) {
	$result = [];
	if (count($strings) == count($str_aligns)) {
		for ($i = 0; $i < count($strings); $i++) {
			$result[$i] = formatStrOfAnyLen($strings[$i], $str_aligns[$i]);
		}
	} else {
		die("Cannot format text. Too many strings or formatting conditions.");
	}
	$result = flattenArr($result);
	array_unshift($result, "******************");
	array_push($result, "******************");
	return $result;
}