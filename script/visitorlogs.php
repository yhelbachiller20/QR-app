<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'checklist');

if(isset($_POST['btnNext']))
{	
	$visitorInfo = [
	'last_name' => $_POST['last_name'], 'first_name' => $_POST['first_name'], 
	'Address' => $_POST['Address'], 'Email'=>$_POST['Email'],
	'Contact_Number'=>$_POST['Contact_Number'],'Gender'=>$_POST['Gender']
	];
	$_SESSION['visitor'] = $visitorInfo;
	$last_name=$_POST['last_name'];
	$first_name=$_POST['first_name'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	$Contact_Number=$_POST['Contact_Number'];
	$Gender=$_POST['Gender'];
	
	//$query= "INSERT into visitor(last_name,first_name,Address,Email,Contact_Number,Gender) VALUES ('$last_name', '$first_name','$Address','$Email','$Contact_Number','$Gender')";
	//$query_run= mysqli_query($connection,$query);
	//if ($query_run)
	//{
		  header("location: choices.php");
		//echo '<script type="text/javascript"> alert("location: choices.php")</script>';
		  
	//}
	//else
	//{
	//		echo '<script type="text/javascript"> alert("Data Not saved")</script>';
	//}
}

?>