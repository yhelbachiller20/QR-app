<?php $pageTitle = "<h2>Information &nbsp &nbsp</h2> <h3>Request visitor to present valid ID</h3>";
include "common/header.php";
include "script/guardview-model1.php";
?>
<form action="" method="POST">
      
			
			<div class="form-group">
                <label>Input Grade:</label>
                <input type="text" name="txtGrade"  placeholder="--.-">       
			</div>
<br>
		<div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnGrade" value="Submit">
          </div>	

    </div>  
	</center>
	</form>
<?php include "common/footer.php";?>