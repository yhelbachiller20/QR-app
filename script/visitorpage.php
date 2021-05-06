<?php
if(isset($_POST['choices'])){
	include "common/connect.php";
	$yesNo =$_POST['yesno'];
	$yesNotxt = $_POST['yesText'];
	$question1 = $_SESSION["question1"];
	$sql = "INSERT INTO `visitor`( `Question5`, q5txt) VALUES ('".$yesNo."','".$yesNotxt."')";
	if ($conn->query($sql) === TRUE) {
		include "common/config.php";
		
		$last_id = $conn->insert_id;
		$url = $config["url_base"].'validation1.php?id='.sha1($last_id);
		header('Location: '.$url);
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

