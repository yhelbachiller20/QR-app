
<?php
//check if there is and employee session
if (!isset($_SESSION['employee'])) {
    $url = $config["url_base"] . 'Employee.php';
    header('Location: ' . $url);
}
if (isset($_POST['btnbodyTemp'])) {
    $BodyTemp = $_POST['txtBodyTemp'];
    if ($BodyTemp >= 37.5) {
        $url = $config["url_base"] . 'script/reject2.php';
        header('Location: ' . $url);
    } else if ($BodyTemp <= 37.4) {
        //echo "Record Successfully!";
        include "common/connect.php";
        $last_name = $_SESSION['employee']['last_name'];
        $first_name = $_SESSION['employee']['first_name'];
        $sql = 'INSERT INTO visitor (last_name, first_name, Body_Temp, log_type) VALUES ("' . $last_name . '", "' . $first_name . '","' . $bodyTemp . '",30);';
        if ($conn->query($sql)) {
            $url = $config["url_base"] . 'wfh_success_page.php';
            header('Location: ' . $url);
        } else {
            die($conn->error);
        }
    }
}
?>
<script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">