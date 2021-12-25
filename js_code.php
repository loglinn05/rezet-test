<?php
    include "included/header.php";
?>
<main>
    <?php include "included/modal.php"; ?>
    <div class = "container-fluid">
        <div class = "row text-center alert">
            <div class = "col-12">
                <h1 class = "h1-reponsive text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay = "0.3s"><strong>Тестовое задание от компании "ReZet" выполненное на JS</strong></h1>
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
            <div id = "test_1" class = "tab-pane fade show active mx-5" id = "test_1" role = "tabpanel" aria-labelledby = "test_1-tab">
                <script type = "text/javascript">
                    let arr = [1, 3, 5, 4, 5, 7];
                    let result = checkCondFulfill(arr);
                    out("<p>arr: </p>", "test_1");
                    out(arr, "test_1");
                    out("<br>", "test_1");
                    out("<p>result: </p>", "test_1");
                    out(result, "test_1");
                    out("<hr>", "test_1");

                    arr = [7, 1, 3, 2, 8, 6, 4, 9, 5, 1, 8];
                    result = checkCondFulfill(arr);
                    out("<p>arr: </p>", "test_1");
                    out(arr, "test_1");
                    out("<br>", "test_1");
                    out("<p>result: </p>", "test_1");
                    out(result, "test_1");
                </script>
            </div>
            <div id = "test_2" class = "tab-pane fade mx-5" id = "test_2" role = "tabpanel" aria-labelledby = "test_2-tab">
                <script type = "text/javascript">
                    arr = [
                        [1, 2, 3, 2, 7],
                        [4, 5, 6, 8, 1],
                        [7, 8, 9, 4, 5],
                    ];
                    out("<p>arr: </p>", "test_2");
                    out(arr, "test_2");
                    out("<br>", "test_2");
                    out("<p>result: </p>", "test_2");
                    out(checkIfContains(arr), "test_2");
                    out("<hr>", "test_2");

                    arr = [
                        [9, 6, 3, 1, 5, 7, 6, 2, 4],
                        [4, 2, 1, 6, 2, 4, 3, 8, 9],
                        [7, 5, 8, 9, 8, 3, 1, 5, 7],
                    ];
                    out("<p>arr: </p>", "test_2");
                    out(arr, "test_2");
                    out("<br>", "test_2");
                    out("<p>result: </p>", "test_2");
                    out(checkIfContains(arr), "test_2");
                </script>
                <p>There's nothing here yet.</p>
            </div>
            <div id = "test_3" class = "tab-pane fade mx-5" id = "test_3" role = "tabpanel" aria-labelledby = "test_3-tab">
                <script type = "text/javascript">
                    let strs = [
                        ["Hello", "World"],
                        ["Brad", "came", "to", "dinner", "with", "us"],
                        ["He", "loves", "tacos"]
                    ];
                    let str_aligns = ["LEFT", "RIGHT", "LEFT"];
                    out("<p>strings: </p>", "test_3");
                    out(strs, "test_3");
                    out("<hr>", "test_3");
                    out("<p>alignments: </p>", "test_3");
                    out(str_aligns, "test_3");
                    out("<hr>", "test_3");
                    out("<p>result: </p>", "test_3");
                    out(formatText(strs, str_aligns), "test_3");
                </script>
                <p>There's nothing here yet.</p>
            </div>
        </div>
    </div>
</main>

<?php include "included/footer.php" ?>