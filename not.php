<?php $pageTitle = "<h2>Online Health Declaration Form Completed!</h2><br>

"; ?>
<?php include "common/header.php"; ?>
<?php include "common/connect.php"; ?>
<?php include "script/session_to_db.php"; ?>

<?php

var_dump($dataToStore['log_type']);
//$x = $_SESSION["log_type"]=30;
//$y = $_SESSION["log_type"]=20;
//var_dump($x !== $y);
if
 ($dataToStore['log_type'] == 30) {
    echo "Please inform the clinic of your symptoms and consult your physician. Thank you.";
} else {
    echo "We apologize but you are not allowed to proceed and enter the Assumption Antipolo premises. This is In line with the health protocols of the school.";
}
?>