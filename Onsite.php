<?php $pageTitle = "Appointment Details  &nbsp";
include "common/header.php"; ?>

        
		<center>
		<br>
		 <label for="Department">Department to Visit:</label>

			<select name="Department" id="Department">
			<option value="0"></option>
			  <option value="Admission">Admission</option>
			  <option value="Finance">Finance</option>
			  <option value="IT">Information Technology</option>
			  <option value="LRC">Library Resource Center</option>
			  <option value="Registrar">Registrar</option>
			</select> <br>
			<div class="form-group">
                <label> Person to visit:</label>
                <input type="text" name="person" placeholder="Name of Person to visit">
            </div>
				<div class="form-group">
                <label> Reason to visit:</label><br>
				<textarea name="reason" rows="5" cols="40"></textarea>
            </div>
			<?php
				echo "Valid only " . date("Y/m/d") . "<br>";
				echo "Today is " . date("l"); "<br>";
				echo date_default_timezone_set("Singapore") . "<br>";
				echo "The time is " . date("h:i:sa");
				?>
			<p>"Please limit visit to 2 hours (maximum) only"</p> 
			<br>
			  <br>
			  <br>
			 
                <form action="choices.php" method="post">
				<input type="submit" class="btn btn-primary" name="back" value="&nbsp Previous" style="float:left;padding-left: 7px;margin-left: 13px;margin-right: 0px;">
			</form>
			<form action="hc1.php" method="post">
				<input type="submit" class="btn btn-primary" name="next" value="Next" style="float:right;margin-right: 13px;">
			</form>
			<br>
			<br>
			<br>
			</center>
    </div>
<?php include "common/footer.php";?>