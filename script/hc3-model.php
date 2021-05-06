<?php
if(isset($_POST['btnNo'])){
	$_SESSION['hc3'] = ['Question3'=> "NO"];
	
	$url = $config["url_base"].'hc4.php';
		header('Location: '.$url);
}

if(isset($_POST['btnYes'])){
	
	$_SESSION['hc3'] = ['Question3'=> "YES"];
	
	$url = $config["url_base"].'not.php';
		header('Location: '.$url);
}		