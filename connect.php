<?php


if(isset($_POST['Agree'])){
	include "common/connect.php";
	$check =$_POST['check'];
	$sql = "INSERT INTO `visitor`(`Agree`) VALUES ("$check")";

	if ($conn->query($sql) === TRUE) {
		include "common/config.php";
		
	//	$last_id = $conn->insert_id;
	//	$url = $config["url_base"].'hc5.php?id='.sha1($last_id);
	//	echo "dumaan dito";
	//	exit;
		if($btnAgree == ""){
			$url = $config["url_base"].'reject.php';
		}
		
		$url = $config["url_base"].'schedule.php?id='.sha1($last_id);
		header('Location: '.$url);
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}