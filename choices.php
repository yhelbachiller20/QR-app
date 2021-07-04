<?php
$pageTitle = "Online Health Declaration <br> Fill out option:";
include "common/header.php";
?>

<body>      

    <div class="panel-body">

        <p>
        <center>
            <a href="Schedule.php" class="btn btn-warning ml-3">By Schedule</a> <br><br>
            <a href="Onsite.php" class="btn btn-warning ml-3">&nbsp On-site &nbsp</a> <br><br>
            <?php if ($_SESSION["type"] == 20) { ?>
                <a href="hc1.php?log_type=30" class="btn btn-warning ml-3">&nbsp Work From Home &nbsp</a>
            <?php } ?>
            </p>        
        </center>
    </div>
    <?php include "common/footer.php"; ?>