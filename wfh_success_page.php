<?php
$pageTitle = "<h2>Information &nbsp &nbsp</h2> <h3></h3>";
include "common/header.php";
unset($_SESSION['employee']);
?>
<h1>Record Successfully saved.</h1>
<p>Stay Safe!</p>
 <center> 
	<form action="Employee.php" method="post">
                <input type="submit" name="ok" value="ok">
            </form>
</center>
<br>

<?php include "common/footer.php"; ?>