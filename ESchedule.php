<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Schedule</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
img {
  float: left;
}
</style>
<div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-left">
		  <img src="AA.png" style="width:70px;height:70px;">
		  <br>
		  <h2><center>Appointment Schedule</h2></center>
		  </div>
<br>
<br><center>
        <form action="hc1.php" method="post">
		 <label for="Department">Department to Visit:</label>

			<select name="Department" id="Department">
			<option value="0"></option>
			  <option value="Admission">Admission</option>
			  <option value="Finance">Finance</option>
			  <option value="IT">Information Technology</option>
			  <option value="LRC">Library Resource Center</option>
			  <option value="Registrar">Registrar</option>
			</select> 
			<br>
			<br>
			
            <div class="form-group">
				<br>
				<label>Estimated time to visit:</label>
				<br>
				<br>
              <label>From:</label>
				<input type="time" value="07:00" min="07:00" max="15:30">
			  <br>
			  <br>
			    <label>To:</label>
				<input type="time" value="16:00" max="16:00">
			  <br>
			  <br>
			
		   Note: <p>Assumption Offices are
			<br>Open from
		   <time>07:00am</time> to <time>4:00pm</time> 
		   <br>every weekday.</p>
				
			<br>
	
                <input type="submit" class="btn btn-primary" value="Submit">
				</center>
            </div>

        </form>
    </div>

</body>
</html>