<?php
  
if (isset($_POST['choices'])) {
    $_SESSION['hc5'] = ['Question5' => $_POST["yesno"], 'q5txt' => $_POST["yesTxt"]];
    if ($_POST["yesno"] == "Yes") {
        $url = $config["url_base"] . 'validation1.php';
        header('Location: ' . $url);
    } else {
        $url = $config["url_base"] . 'validation1.php';
        header('Location: ' . $url);
    }
}