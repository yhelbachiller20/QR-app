<?php

if (isset($_POST['log_type']) && !empty($_POST['log_type'])) {
    $_SESSION['log_type'] = 30;
}
if (isset($_POST['btnNo'])) {
//gawin dito ang back
    $_SESSION['hc1'] = ['Question1' => "NO"];

    $url = $config["url_base"] . 'hc2.php';
    header('Location: ' . $url);
}
if (isset($_POST['btnYes'])) {

    $_SESSION['hc1'] = ['Question1' => "YES"];

    $url = $config["url_base"] . 'not.php';
    header('Location: ' . $url);
}



