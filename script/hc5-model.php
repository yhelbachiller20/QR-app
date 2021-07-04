<?php

$noChoiceSelected = "";
if (isset($_POST['choices'])) {

    if (!isset($_POST['yesno'])) {
        $noChoiceSelected = "Please Select One.";
    } else {

        $_SESSION['hc5'] = ['Question5' => $_POST["yesno"], 'q5txt' => $_POST["yesText"]];
if($_SESSION["log_type"]==30){
        $url = $config["url_base"] . 'wfh.php';
}else{
        $url = $config["url_base"] . 'validation1.php';
}


            header('Location: ' . $url);
    }
}