<?php
session_start();
if((!isset($_SESSION['visitor']) && !isset($_SESSION['employee'])) &&  strpos($_SERVER["REQUEST_URI"], "hc")){
	$url = $config["url_base"].'visitor.php';
		header('Location: '.$url);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "config.php"; ?>
<head>
  <title><?php echo $pageTitle;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-swidth, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--
  <link rel="stylesheet" href="<?php echo $config["url_base"];?>plugins/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo $config["url_base"];?>plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $config["url_base"];?>plugins/jquery/jquery-slim.min.js"></script>
  -->
</head>
<style>
img#AA {
  float: left;
}

div.panel-heading{
	padding-bottom: 15px;
}	

.text-center{
	text-align: center;
}
</style>
<body>
	<div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
		  <img src="AA.png" id="AA" style="width:70px;height:70px;">
            <h2 class="text-center"><?php echo $pageTitle;?></h2>
          </div>