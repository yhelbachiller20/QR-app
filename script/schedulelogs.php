<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'checklist');

if(isset($_POST['schedNext']))
{	
	$_SESSION["schedule"] = ['department' => $_POST['Department'], 'person' => $_POST['person'], 'reason' => $_POST['reason'], 'timeTo' => $_POST['timeTo'], 'timeFrom' => $_POST['timeFrom']];
	header("location: hc1.php");
	//$Email=$_POST['Email'];
//	$Contact_Number=$_POST['Contact_Number'];
	//$Gender=$_POST['Gender'];
	
	
	//$query= "INSERT into visitor(Department, person_to_visit) VALUES ('$Department','$person')";
	//$query_run= mysqli_query($connection,$query);
	//if ($query_run)
	//{
		  //header("location: hc1.php");
	//	echo '<script type="text/javascript"> alert("location: hc1.php")</script>';
	//	  
	//}
	//else
	//{
	//		echo '<script type="text/javascript"> alert("Data Not saved")</script>';
	//}

}
?>