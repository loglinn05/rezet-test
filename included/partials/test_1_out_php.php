<?php
    $arr = [1, 3, 5, 4, 5, 7];
    $result = checkCondFulfill($arr);
    echo "<p>arr: </p>";
    out($arr);
    echo "<br>";
    echo "<p>result: </p>";
    out($result);
    echo "<hr>";

    $arr = [7, 1, 3, 2, 8, 6, 4, 9, 5, 1, 8];
    $result = checkCondFulfill($arr);
    echo "<p>arr: </p>";
    out($arr);
    echo "<br>";
    echo "<p>result: </p>";                    
    out($result, "result");
?>