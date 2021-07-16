<?php
$pageTitle = "<h2>Work From Home &nbsp &nbsp</h2> <h3></h3>";
include "common/header.php";
unset($_SESSION['employee']);
?>
<center>
<h1>Body temperature input Successfully saved.</h1>
<p>Stay Safe and healthy!</p>
	<form action="completed.php" method="post">
                <input type="submit" name="ok" value="ok">
            </form>
</center>
<br>

<?php include "common/footer.php"; ?>