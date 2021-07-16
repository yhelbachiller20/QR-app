<?php $pageTitle = "PRIVACY and CONSENT";
include "common/header.php"; ?>
<form action="Employee-form.php" onsubmit="if(document.getElementById('agree').checked) { return true; } { return false; }">
<center>
				<img src= "./consent1.PNG" style="max-width:100%;height:5;">
				</center>

&nbsp &nbsp <input type="checkbox" name="checkbox" value="check" id="agree" /> Agree
<br>
<br>
&nbsp &nbsp <input type="submit" name="submit" value="Submit" />
<br>
<br>
</form>
<?php include "common/footer.php"; ?>