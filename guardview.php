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
		<div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnbodyTemp" value="Submit">
          </div>	

    </div>  
	</center>
	</form>
<?php include "common/footer.php";?>