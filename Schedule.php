<?php $pageTitle = 'Appointment Details';?>
<?php include 'common/header.php'; ?>
<?php include 'script/schedulelogs.php'; ?>



<br><center>
		<form action="" method="post">
		<div class="form-group">
                <label> Area/s or Department/s to Visit:</label>
                <input type="text" name="Department" placeholder="Place to visit">
            </div>
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
            <div class="form-group">
				<br>				
				<label>Estimated Time to Visit:</label>
				<br>
              <label>From:</label>
				<input type="time" name="timeFrom" value="07:00" min="07:00" max="15:30">
			  <br>
			  <br>
			    <label>To:</label>
				<input type="time" name="timeTo" value="16:00" max="16:00">
			  <br>
			  <br>
			<p>Please limit visit to 2 hours (maximum) only</p> 
			</center>
			<input type="submit" class="btn btn-primary" name="schedNext" value="Next" style="float:right;margin-right: 13px;">
			</form>
				<form action="choices.php" method="post">
				<input type="submit" class="btn btn-primary" name="back" value="&nbsp Previous" style="float:left;padding-left: 7px;margin-left: 13px;margin-right: 0px;">
			<br>
			<br>
				</center>
            </div>
	</form>
<?php include "common/footer.php";?>