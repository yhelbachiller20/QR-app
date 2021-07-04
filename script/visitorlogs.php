<?php
	  $lastname_error = "";
	  $firstname_error =""; 
	  $Address_error="";
	  $Email_error ="";
	  $Contact_Number_error ="";
	  $Gender_error = ""; 
	  $lastname = "";
	  $firstname = "";
	  $Address= "";
	  $Email ="";
	  $Contact_Number ="";
	  $Gender ="";
	if(isset($_POST['btnNext'])){
		if(empty($_POST['last_name'])){
			$lastname_error="Required";
		} else { 
			$last_name=($_POST['last_name']);
		}
		if(empty($_POST['first_name'])){
			$firstname_error="Required";
		}else {
			$first_name=($_POST['first_name']);
		}
		if(empty($_POST['Address'])){
			$Address_error="Required";
		}else{
			$Address=($_POST['Address']);
		}
		if(empty($_POST['Email'])){
			$Email_error="Required";
		}else{
			$Email=($_POST['Email']);
		}
		if(empty($_POST['Contact_Number'])){
			$Contact_Number_error="Required";
			}else{
				$Contact_Number=($_POST['Contact_Number']);
			}
		if(empty($_POST['Gender'])){
			$Gender_error="Required";
			$gender="";
			}else{
				$gender=($_POST['Gender']);
			}
	
	$visitorInfo = [
	'last_name' => $_POST['last_name'],
	'first_name' => $_POST['first_name'], 
	'Address' => $_POST['Address'],
	'Email'=>$_POST['Email'],
	'Contact_Number'=>$_POST['Contact_Number'],
	'Gender'=>$gender];
	
	$_SESSION['visitor'] = $visitorInfo;
	$last_name=$_POST['last_name'];
	$first_name=$_POST['first_name'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	$Contact_Number=$_POST['Contact_Number'];
	
	
if($lastname_error !="Required" && $firstname_error !="Required" && $Address_error !="Required" && 
$Email_error !="Required" && $Contact_Number_error !="Required" && $Gender_error !="Required"){
	header("location: choices.php");
	
//var_dump($_SESSION);	
}
}	
		
?>