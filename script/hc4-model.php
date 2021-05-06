<?php
if(isset($_POST['choices'])){
	include "common/connect.php";
	$yesNo =$_POST['yesno'];
	$yesNotxt = $_POST['yesTxt'];
	$question4 = $_SESSION["question4"];
	$sql = "INSERT INTO `visitor`( `Question4`, q4txt) VALUES ('".$yesNo."','".$yesNotxt."')";

	if ($conn->query($sql) === TRUE) {
		include "common/config.php";
		
	//	$last_id = $conn->insert_id;
	//	$url = $config["url_base"].'hc5.php?id='.sha1($last_id);
	//	echo "dumaan dito";
	//	exit;
		if($yesNo == "Yes"){
			$url = $config["url_base"].'not.php';
		}
		
		$url = $config["url_base"].'hc5.php?id='.sha1($last_id);
		header('Location: '.$url);
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}