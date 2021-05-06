<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Page</title>
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
            <h2><center>Sign Up </h2></center>
			  <p>Please fill this form to create an account.</p>
          </div>
        <form action="hc1.php" method="post">
            <div class="form-group">
			 <label>Last Name</label>
                <input type="text" name="Lastname" class="form-control" placeholder="Lastname">
            </div>  <div class="form-group">
                <label>First Name</label>
                <input type="text" name="Lastname" class="form-control" placeholder="Firstname">
            </div>  <div class="form-group">
			<div class="form-group">
                <label>Address</label>
                <input type="text" name="Address" class="form-control" placeholder="Complete Address">
   
			<div class="form-group">
                <label>Email Address</label>
                <input type="email" name="Email_Address" class="form-control" placeholder="Email Address">
            </div>    
			<div class="form-group">
                <label>Contact number </label>
                <input type="number" name="contact_number" class="form-control" placeholder="Cellphone/Phone Number">
            </div>    
			<div class="form-group">
				 <label for="No" class="radio-inline">
				 <input type="radio" name="gender" value="no"id="No"/>Female</label>
				 <input type="radio" name="gender" value="no"id="No"/>Male</label>
            </div>			
			
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>	
			<a href="Statement.php">View Privacy Statement</a>.</p>
        </form>
    </div>    
</body>
</html>