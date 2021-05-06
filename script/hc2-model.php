<?php
if(isset($_POST['btnNo'])){
	$_SESSION['hc2'] = ['Question2'=> "NO"];
	
	$url = $config["url_base"].'hc3.php';
		header('Location: '.$url);
}

if(isset($_POST['btnYes'])){
	
	$_SESSION['hc2'] = ['Question2'=> "YES"];
	
	$url = $config["url_base"].'not.php';
		header('Location: '.$url);
}		