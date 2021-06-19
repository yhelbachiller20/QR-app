<?php

$noChoiceSelected = "";
if (isset($_POST['choices'])) {
    if (!isset($_POST['yesno'])) {
        $noChoiceSelected = "Please Select One.";
    } else {
        $_SESSION['hc4'] = ['Question4' => $_POST["yesno"], 'q4txt' => $_POST["yesTxt"]];
        if ($_POST["yesno"] == "Yes") {
            $url = $config["url_base"] . 'not.php';
            header('Location: ' . $url);
        } else {
            $url = $config["url_base"] . 'hc5.php';
            header('Location: ' . $url);
        }
    }
}