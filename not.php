<?php $pageTitle = "<h2>Online Health Declaration Form.</h2><br>

"; ?>
<?php include "common/header.php"; ?>
<?php include "common/connect.php"; ?>
<?php include "script/session_to_db.php"; ?>


<?php


 if($dataToStore['log_type'] == 30) {
    echo  "<p><center>Please inform the clinic of your symptoms and consult your physician. <br /> Thank you.</center></p>";  
//	""; 
} else {
    echo  "<p><center>We apologize but you are not allowed to proceed and enter the Assumption Antipolo premises. This is In line with the health protocols of the school.</center></p>";  
}
?>

<br>
<br>
		<center>		 <form action="not1.php" method="post">
				 <input type="submit" class="btn btn-primary" value="Ok">
		</center>
		<br>
		</form>	