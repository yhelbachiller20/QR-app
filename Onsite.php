<?php $pageTitle = 'Appointment Details';?>
<?php include 'common/header.php'; ?>
<?php include 'script/onsitelogs.php'; ?>


        
	<br><center>
		<form action="" method="post">
		 <label for="Department">Department to Visit:</label>

			<select name="Department">
				<option value="0">&nbsp &nbsp ----- </option>
				<option value="Admission">Admission</option>
				<option value="Finance">Finance</option>
				<option value="IT">Information Technology</option>
				<option value="LRC">Library Resource Center</option>
				<option value="Registrar">Registrar</option>
			</select> 
			<br>
			<br>
			<div class="form-group">
                <label> Person to Visit:</label>
                <input type="text" name="person" placeholder="Name of Person to visit">
            </div>
				<div class="form-group">
                <label> Reason for Visit:</label><br>
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
			 
				<input type="submit" class="btn btn-primary" name="next" value="Next" style="float:right;margin-right: 13px;">
			</form>
			    <form action="choices.php" method="post">
				<input type="submit" class="btn btn-primary" name="back" value="&nbsp Previous" style="float:left;padding-left: 7px;margin-left: 13px;margin-right: 0px;">
			</form>
			<br>
			<br>
			<br>
			</center>
    </div>
<?php include "common/footer.php";?>