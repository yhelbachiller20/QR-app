
<?php
		if(isset($_POST['btnbodyTemp'])){
    $BodyTemp= $_POST['txtBodyTemp'];

	
	
	if($BodyTemp >= 37.5)
	{
		 $url = $config["url_base"] . 'script/reject2.php';
        header('Location: ' . $url);
	}
else if ($BodyTemp <=37.4)
{
//echo "Record Successfully!";
}
}




?>
<script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>
	<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">