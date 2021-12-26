<?php
    require "required/helpers.php";
    require "required/test_1.php";
    require "required/test_2.php";
    require "required/test_3.php";
    include "included/partials/header.php";
?>
<main>
    <?php include "included/partials/modal.php"; ?>
    <div class = "container-fluid">
        <div class = "row text-center alert">
            <div class = "col-12">
                <h1 class = "h1-reponsive text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay = "0.3s"><strong><?= $header ?></strong></h1>
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
                <?php include $tab_1 ?>
            </div>
            <div class = "tab-pane fade mx-5" id = "test_2" role = "tabpanel" aria-labelledby = "test_2-tab">
                <?php include $tab_2 ?>
            </div>
            <div class = "tab-pane fade mx-5" id = "test_3" role = "tabpanel" aria-labelledby = "test_3-tab">
                <?php include $tab_3 ?>
            </div>
        </div>
    </div>
</main>

<?php include "included/partials/footer.php" ?>