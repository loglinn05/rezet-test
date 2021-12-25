/**
 * Determine the length of a row.
 * Is used for picking up a 3 * 3
 * matrix part and serves as the
 * max offset later.
 */
function rowLength(arr)
{
	return arr[0].length;
}

/**
 * Picking up a 3 * 3 matrix part.
 * $arr is the matrix itself,
 * $offset - the index of the first
 * column of this little matrix.
 */
function pickUp(arr, offset = 0)
{
    if (
        (offset < (rowLength(arr) - 2))
        &&
        (offset >= 0)
    ) {
        let matrix = [];
        for (let i = 0; i < 3; i++) {
            matrix.push([]);
            for (let j = offset; j < (offset + 3); j++) {
                matrix[i].push(arr[i][j]);
            }
        }
        return matrix;
    } else if(offset > (rowLength(arr) - 3)) {
        die("The offset is too big for this array.", "test_3");
    } else {
        die("The offset is illegal.", "test_3");
    }
}

/**
 * Checking if a 3 * 3 matrix part contains
 * all the digits from 1 to 9.
 */
function containsAllDigits(arr)
{
    arr = arr.flat(Infinity);
    let uniqueDigits = arr.unique();
    if (uniqueDigits.length == 9) {
        return true;
    } else {
        return false;
    }
}

/**
 * Checking if every 3 * 3 matrix part
 * contains all the digits from 1 to 9.
 */
function checkIfContains(arr)
{
    let result = [];
    for (let i = 0; i < (rowLength(arr) - 2); i++) {
        result.push(containsAllDigits(pickUp(arr, i)));
    }
    return result;
}