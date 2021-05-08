<?php $pageTitle = "PRIVACY and CONSENT";
include "common/header.php"; ?>
<form action="visitor.php" onsubmit="if(document.getElementById('agree').checked) { return true; } { return false; }">
 
		<div class="panel-body"></center>
	<p>
	<center><h5><b>Personal information <br> shared through this app is used solely for contract tracing purposes. <br>
No data will be shared to other parties without your consent.</h5></center></b>
				<br>By continuing use this app, I hereby authorize Assumption Antipolo to collect and process the data indicated for the purpose of effecting control of the COVID-19 infection.
				I understand that my personal information is protected by RA 10173, Data Privacy Act of 2012, and that I am required by RA 11469, 
				Bayanihan to Heal as One Act, to provide truthful information. *
				</p> 

 
<input type="checkbox" name="checkbox" value="check" id="agree" /> Agree
<br>
<br>

<input type="submit" name="submit" value="submit" />

</form>
    </div>
<?php include "common/footer.php"; ?>