<?php $pageTitle = "PRIVACY and CONSENT";
include "common/header.php"; ?>
<form action="Employee-form.php" onsubmit="if(document.getElementById('agree').checked) { return true; } { return false; }">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<table style="width:100%">
  <tr><td><center><b>Personal information</center><b>
<b><p style="text-align:justify-left;">shared through this app is used solely for contract tracing purposes.
		No data will be shared to other parties without your consent.</b></p></th></tr>
</table>

<!--<table style="width:100%">
    <tr><td><center><b>Personal information</center><b></th></tr>
 <td><b><p style="text-align:justify-left;">shared through this app is used solely for contract tracing purposes.
		No data will be shared to other parties without your consent.</b></p></td>
</table>-->

		<br><p style="text-align:justify-left;">By continuing use this app, I hereby authorize Assumption Antipolo to collect and process the data indicated for the purpose of effecting control of the COVID-19 infection.
				I understand that my personal information is protected by RA 10173, Data Privacy Act of 2012, and that I am required by RA 11469, 
				Bayanihan to Heal as One Act, to provide truthful information. *
				</p> 

 
 	&nbsp; 	&nbsp;<input type="checkbox" name="checkbox" value="check" id="agree" /> Agree
<br>
<br>

&nbsp; 	&nbsp;<input type="submit" name="submit" value="Submit" />
<br>
<br>

</form>
    </div>
<?php include "common/footer.php"; ?>