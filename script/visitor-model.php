<?php
if(isset($_POST['btnNext'])){
	session_start();
	$visitor['last_name'] = $_POST["last_name"];
	$visitor['first_name'] = $_POST["first_name"];
	$visitor['Address'] = $_POST["Address"];
	$visitor['Email_Address'] = $_POST["Email_Address"];
	$visitor['contact_number'] = $_POST["contact_number"];
	$visitor['gender'] = $_POST["gender"];
	$_SESSION['visitor'] = $visitor;
	$url = $config["url_base"].'choices.php';
	header('Location: '.$url);
}