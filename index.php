<?php
    require "required/helpers.php";
    require "required/test_1.php";
    require "required/test_2.php";
    require "required/test_3.php";
    include "included/header.php";
?>
<main>
    <?php include "included/modal.php"; ?>
    <div class = "container-fluid">
        <div class = "row text-center alert">
            <div class = "col-12">
                <h1 class = "h1-reponsive text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay = "0.3s"><strong>Тестовое задание от компании "ReZet"</strong></h1>
            </div>
        </div>
    </div>
    <div class = "container col-8 mt-5">
        <ul class = "nav nav-tabs" id = "myTab" role = "tablist">
            <li class = "nav-item">
                <a class = "nav-link active" id = "test_1-tab" data-toggle = "tab" href="#test_1" role = "tab" aria-controls = "test_1" aria-selected = "true">Test 1</a>
            </li>
            <li class = "nav-item">
                <a class = "nav-link" id = "test_2-tab" data-toggle = "tab" href = "#test_2" role = "tab" aria-controls = "test_2" aria-selected = "false">Test 2</a>
            </li>
            <li class = "nav-item">
                <a class = "nav-link" id = "test_3-tab" data-toggle = "tab" href="#test_3" role = "tab" aria-controls = "test_3" aria-selected = "false">Test 3</a>
            </li>
        </ul>
        <div class = "tab-content border border-dark rounded-lg my-3" id = "myTabContent">
            <div class = "tab-pane fade show active mx-5" id = "test_1" role = "tabpanel" aria-labelledby = "test_1-tab">
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
            </div>
            <div class = "tab-pane fade mx-5" id = "test_2" role = "tabpanel" aria-labelledby = "test_2-tab">
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
            </div>
            <div class = "tab-pane fade mx-5" id = "test_3" role = "tabpanel" aria-labelledby = "test_3-tab">
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
            </div>
        </div>
    </div>
</main>

<?php include "included/footer.php" ?>