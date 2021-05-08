<?php
if(isset($_POST['choices'])){

	
		$_SESSION['hc4'] = ['Question4'=> "No"];	
		$url = $config["url_base"].'hc5.php';
		header('Location: '.$url);
}	
	