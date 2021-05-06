<?php
if(isset($_POST['choices'])){
	if($yesno == "No")
	$_SESSION['hc4'] = ['Question4'=> "No"];
	$url = $config["url_base"].'hc5.php';
		header('Location: '.$url);
}	
		if(isset($_POST['choices'])){
					if($yesTxt == "Yes"){
		$_SESSION['hc4'] = ['Question4'=>" yes"];
			$url = $config["url_base"].'not.php';

		}
		}