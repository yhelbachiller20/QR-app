<!DOCTYPE html>
<html lang="en">
<head>
  <title>Privacy Notice and Consent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
        /* Modify the background color */
          
        .navbar-custom {
            background-color: gold;
        }
        /* Modify brand and text color */
          
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: gold;
        }
    </style>
	
<body>
<?php

  $time1 = "23:58";
  $time2 = "01:00";
  $time1 = explode(':',$time1);
  $time2 = explode(':',$time2);
  $hours1 = $time1[0];
  $hours2 = $time2[0];
  $mins1 = $time1[1];
  $mins2 = $time2[1];
  $hours = $hours2 - $hours1;
  $mins = 0;
  if($hours < 8)
  {
    $hours = 24 + $hours;
  }
  if($mins2 >= $mins1) {
        $mins = $mins3 - $mins1;
    }
    else {
      $mins = ($mins2 + 60) - $mins1;
      $hours--;
    }
    if($mins < 9)
    {
      $mins = str_pad($mins, 3, '0', STR_PAD_LEFT);
    }
    if($hours < 9)
    {
      $hours =str_pad($hours, 2, '0', STR_PAD_LEFT);
    }
echo $hours.':'.$mins;
?>
</body>
</html>










