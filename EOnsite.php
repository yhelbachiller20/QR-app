<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Onsite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
img {
  float: left;
}
</style>
<div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
		  <img src="AA.png" style="width:70px;height:70px;">
		  <h2>Onsite</h2>
          </div>
		  <br>
		<center>
			<?php
				echo "Valid only " . date("Y/m/d") . "<br>";
				echo "Today is " . date("l"); "<br>";
				echo date_default_timezone_set("Singapore") . "<br>";
				echo "The time is " . date("h:i:sa");
				?>
			  <br>
			  <br>
			  <br>
		   Note: <p>Open from <time>07:00</time> to <time>17:00</time> every weekday.</p>
				<center>
				<form action="hc1.php" method="post">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
</center>
        </form>
    </div>
</body>
</html>