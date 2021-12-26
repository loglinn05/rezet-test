<?php
    $arr = [
        [1, 2, 3, 2, 7],
        [4, 5, 6, 8, 1],
        [7, 8, 9, 4, 5],
    ];
    echo "<p>arr: </p>";
    out($arr);
    echo "<br>";
    echo "<p>result: </p>";
    out(checkIfContains($arr));
    echo "<hr>";
    $arr = [
        [9, 6, 3, 1, 5, 7, 6, 2, 4],
        [4, 2, 1, 6, 2, 4, 3, 8, 9],
        [7, 5, 8, 9, 8, 3, 1, 5, 7],
    ];
    echo "<p>arr: </p>";
    out($arr);
    echo "<br>";
    echo "<p>result: </p>";
    out(checkIfContains($arr));
?>