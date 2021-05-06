<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$last_name = $last_name =" ";
$last_name_err = $last_name_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["last_name"]))){
        $username_err = "Please enter a last_name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM visitor WHERE last_name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_last_name);
            
            // Set parameters
            $param_last_name = trim($_POST["last_name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This last_name is already taken.";
                } else{
                    $username = trim($_POST["last_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
  //  if(empty(trim($_POST["password"]))){
     //   $password_err = "Please enter a password.";     
 //   }// elseif(strlen(trim($_POST["password"])) < 6){
        //$password_err = "Password must have atleast 6 characters.";
    //} else{
       // $password = trim($_POST["password"]);
   // }
    
    // Validate confirm password
    //if(empty(trim($_POST["confirm_password"]))){
       // $confirm_password_err = "Please confirm password.";     
    //} else{
       // $confirm_password = trim($_POST["confirm_password"]);
        //if(empty($password_err) && ($password != $confirm_password)){
           // $confirm_password_err = "Password did not match.";
       // }
   // }
    
    // Check input errors before inserting in database
    if(empty($last_name_err) && empty($last__err) && empty($last_name_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO visitor (last_name) VALUES ( ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_last_name);
            
            // Set parameters
            $param_last_name = $last_name;
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: choice.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Last name:</label>
                <input type="text" name="last_name" class="form-control <?php echo (!empty($last_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $last_name; ?>">
                <span class="invalid-feedback"><?php echo $last_name_err; ?></span>
            </div>    
          
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
              
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
			<a href="Statement.php">View Privacy Statement</a>.</p>
        </form>
    </div>    
</body>
</html>