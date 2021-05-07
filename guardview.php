<?php $pageTitle = "<h2>Information &nbsp &nbsp</h2> <h3>Request visitor to present valid ID</h3>";
include "common/header.php";
include "script/guardview-model.php";
?>
<form action="" method="POST">
      
        <div class="panel-body">
<center>
	<p style="font-size:15px"><h2>Details:</h2>
	<br> Name: Bachi, Ella
	<br> Gender: Female
	<br> Date of visit: 04/07/2021
	<br> Visit time:10am
	<br>Department: Finance
	<br>Person to visit: Ms. Princess
	<br>Reason for visit: Pay Tution Fee
	   </p>
	

<br>
<br>
			
			<div class="form-group">
                <label>Body Temperature:</label>
                <input type="text" name="txtBodyTemp"  placeholder="--.-">       
			</div>
<br>
<label for="Guard Name">Guard Name</label>

			<select name="Assigned Guard">
				<option value="0">&nbsp &nbsp ----- </option>
				<option value="SG">OIC Vizorro</option>
				<option value="SG">SG Baldo</option>
				<option value="SG">SG Martin</option>
				<option value="LG">LG Bachiller</option>
				<option value="LG">LG Maglente</option>
			</select> 
			&nbsp &nbsp &nbsp
			<label for="Post">Guard Post</label>

			<select name="Guard Post">
				<option value="0">&nbsp &nbsp ----- </option>
				<option value="1">Multi Purpose Building</option>
				<option value="2">Baguyo Gate</option>
				<option value="3">Main Gate</option>
			</select> 
			<br>
			<br>
		<div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnbodyTemp" value="Submit">
          </div>	
			
    </div>  
	</center>
	</form>
<?php include "common/footer.php";?>