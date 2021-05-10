<?php
if(isset($_POST['btnbodyTemp'])){
	$BodyTemp= $_POST['txtBodyTemp'];
	$txtGuardName=$_POST['txtGuardName'];
	
	
	if($BodyTemp >= 37.5)
	{
		header ("location:not.php");
	}
else if ($BodyTemp <=37.4)
{
	echo "Passed! input by "  .$txtGuardName;
}
}


