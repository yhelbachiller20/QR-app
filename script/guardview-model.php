<?php
$link = mysqli_connect("localhost", "root", "", "checklist");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE visitor 
SET 
    GuardName = '".$_POST['txtGuardName']."' , 
	Body_Temp = '".$_POST['txtBodyTemp']."'
	WHERE
	SHA1(id) = '" . $_GET['id'] . "'";
	
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
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
//echo "Record Successfully!";
}
}




?>
