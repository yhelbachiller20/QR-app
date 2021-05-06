<?php
if(isset($_POST['btnbodyTemp'])){
	$BodyTemp= $_POST['txtBodyTemp'];
	
	
	if($BodyTemp >= 37.5)
	{
		header ("location:not.php");
	}
else if ($BodyTemp <=37.4)
{
	echo "Passed!";
}
}


