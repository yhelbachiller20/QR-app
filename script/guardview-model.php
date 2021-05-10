<?php
		if(isset($_POST['btnbodyTemp'])){
    $BodyTemp= $_POST['txtBodyTemp'];
	$txtGuardName=$_POST['txtGuardName'];


	
	
	if($BodyTemp >= 37.5)
	{
		 $url = $config["url_base"] . 'not.php';
        header('Location: ' . $url);
	}
else if ($BodyTemp <=37.4)
{
	echo "Passed! input by "  .$txtGuardName;
	//$sql = "INSERT INTO visitor (GuardName, BodyTemp) VALUES ('$txtGuardName', 'Body_Temp')";
}
}




?>
