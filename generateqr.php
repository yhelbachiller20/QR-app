<?php 
if(isset($_GET['type'])){
	include "common/config.php";
	$qrType = $_GET['type'];
	
	switch($qrType){
		case "checklist":
		$qrData = $config['url_base'].'view_checklist.php?id='.$_GET['id'];
		
		
    include('plugins/phpqrcode/qrlib.php');
    
    // outputs image directly into browser, as PNG stream
    QRcode::png($qrData);
		break;
	}
}

