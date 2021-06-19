<?php

if (isset($_POST['choices'])) {
    $_SESSION['hc4'] = ['Question4' => $_POST["yesno"], 'q4txt' => $_POST["yesTxt"]];
    if ($_POST["yesno"] == "Yes") {
        $url = $config["url_base"] . 'not.php';
        header('Location: ' . $url);
    } else {
        $url = $config["url_base"] . 'hc5.php';
        header('Location: ' . $url);
		
    }
}