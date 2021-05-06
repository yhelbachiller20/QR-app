<?php
var_dump($_SESSION);
exit;
if(isset($_POST['choices'])){
	include "common/connect.php";
	
	

	//$sql = "INSERT INTO `visitor`( `Agree`, `last_name`, `first_name`, `Address`, `Email`, `Contact_Number`, `Gender`, `Department`, `person_to_visit`, `reason_to_visit`, `From_visit`, `To_visit`, `Question1`, `Question2`, `Question3`, `Question4`, `q4txt`, `Question5`, `q5txt`, `Code`, `created_at`, `Enter_at`, `Body_Temp`) VALUES 
													('','".$_SESSION["visitor"]["last_name"]."','','','',','',',','',[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24])";

	if ($conn->query($sql) === TRUE) {
		include "common/config.php";
		
		$last_id = $conn->insert_id;
		$url = $config["url_base"].'hc5.php?id='.sha1($last_id);
		echo "dumaan dito";
		exit;
		if($yesNo == "Yes"){
			$url = $config["url_base"].'reject.php';
		}
		
		$url = $config["url_base"].'hc5.php?id='.sha1($last_id);
		header('Location: '.$url);
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

