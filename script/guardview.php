
<?php
		if(isset($_POST['btnbodyTemp'])){
    $BodyTemp= $_POST['txtBodyTemp'];
	
	
	if($BodyTemp >= 37.5)
	{
		 $url = $config["url_base"] . 'not.php';
        header('Location: ' . $url);
	}
else if ($BodyTemp <=37.4)
{
//echo "Record Successfully!";
}
}




?>
