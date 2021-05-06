<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'health');

if(isset($_POST['choices']))
{
	$gender=$_POST['gender'];
	
	$query= "INSERT into gender(gender) VALUES ('$gender')";
	$query_run= mysqli_query($connection,$query);
	if ($query_run)
	{
		  header("location: hc2.php");
		echo '<script type="text/javascript"> alert("location: hc2.php")</script>';
		  
	}
	else
	{
			echo '<script type="text/javascript"> alert("Data Not saved")</script>';
	}

}
?>