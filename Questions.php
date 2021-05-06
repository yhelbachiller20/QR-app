<<!DOCTYPE html>
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
<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
   <div class="nav-link"><img src="./AA-official-logo.png" style="width:70px;height:70px;"> <span class="sr-only">(current)</span></div>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="safety.php">Safety Reminders</a></li>
      <li><a href="statement.php">Privacy Statement</a></li>
    </ul>
  </div>
</nav>
<div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h2><center>Health Checklist <br> I hereby declare to Assumption Antipolo that I will tell the truth</h2></center>
          </div>
          <div class="panel-body"></center>

            <p style="font-size:15px">
	<br>			- I don't have cough,colds,and other respiratory symptoms;
	<br>			- I don't have relevant history of travel or COVID-19 exposure within the last 14days.
</label>
              <form action="indicate1.php" method="post">
			<input type="submit" class="btn btn-warning" name="choices" value="Yes">
			</form>
			<form action="confirmation.php" method="post">
			<input type="submit"  class="btn btn-danger ml-3" name="choices" value="No">
			</form>
  </div>
  </body>
</html>