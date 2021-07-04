
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
	
	//echo $_SESSION['hc1']['Question1'];
	
	$question1=$_SESSION['hc1']['Question1'];
	$question2=$_SESSION['hc2']['Question2'];
	$question3=$_SESSION['hc3']['Question3'];
	$question4=$_SESSION['hc4']['Question4'];
	$qtxt4=$_SESSION['hc4']['q4txt'];
	$question5=$_SESSION['hc5']['Question5'];
	$qtxt5=$_SESSION['hc5']['q5txt'];


        $sql = 'INSERT INTO visitor (last_name, first_name, Question1, Question2, Question3, Question4, q4txt, Question5, q5txt, Body_Temp, log_type) VALUES ("' . $last_name . '", "' . $first_name . '","'.$question1.'","'.$question2.'","'.$question3.'","'.$question4.'","'.$qtxt4.'","'.$question5.'","'.$qtxt5.'","' . $BodyTemp . '",30);';
        
	//echo $sql;
	//exit;

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