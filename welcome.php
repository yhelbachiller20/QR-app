<?php
$pageTitle = "Assumption Antipolo";
include "common/header.php";
?>
<?php
// Initialize the session
//session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<html>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1><!--<br><p>Please click reports to view Health Declation Form Details. Thank you.<br> <br>-->
    
		<a href="clinicview.php" class="btn btn-primary">Reports</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
		
    </p>
</body>
</html>