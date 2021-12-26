<?php
    $strs = [
        ["Hello", "World"],
        ["Brad", "came", "to", "dinner", "with", "us"],
        ["He", "loves", "tacos"]
    ];
    $str_aligns = ["LEFT", "RIGHT", "LEFT"];
    echo "<p>strings: </p>";
    out($strs);
    echo "<hr>";
    echo "<p>alignments: </p>";
    out($str_aligns);
    echo "<hr>";
    echo "<p>result: </p>";
    out(formatText($strs, $str_aligns));
?>