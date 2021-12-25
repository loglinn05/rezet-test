/**
 * Formatting a string the length
 * of which is less than 16.
 */
function formatStr(str, str_align)
{
	fill = "";
	for (let i = 0; i < (16 - str.length); i++) {
		fill += "&nbsp;";
	}
	if (str_align == "LEFT") {
		str = "*" + str + fill + "*";
	} else if (str_align == "RIGHT") {
		str = "*" + fill + str + "*";
	} else {
		str = "*" + str + fill + "*";
	}
	return str;
}

/**
 * Formatting strings of any length.
 */
function formatStrOfAnyLen(arr, str_align = "LEFT")
{
	let str = arr.join(" ");
	if (str.length <= 16) {
		str = formatStr(str, str_align);
	} else {
		let chunks = [];
		let i = 0;
		chunks[i] = "";
		for (let k = 0; k < arr.length; k++) {
			if (
				(chunks[i].length <= 16)
				&&
				((chunks[i] + " " + arr[k]).length <= 16)
			) {
				if (k != 0) {
					chunks[i] += " " + arr[k];
				} else {
					chunks[i] += arr[k];
				}
			} else {
				i++;
				chunks[i] = arr[k];
			}
		}
		for (let i = 0; i < chunks.length; i++) {
			chunks[i] = formatStr(chunks[i], str_align);
		}
		str = chunks;
	}
	return str;
}

// Formatting a text that is an array of arrays of words.
function formatText(strings, str_aligns) {
	let result = [];
	if (strings.length == str_aligns.length) {
		for (let i = 0; i < strings.length; i++) {
			result.push(formatStrOfAnyLen(strings[i], str_aligns[i]));
		}
	} else {
		die("Cannot format text. Too many strings or formatting conditions.", "test_3");
	}
	result = result.flat(Infinity);
	result.unshift("******************");
	result.push("******************");
	return result;
}