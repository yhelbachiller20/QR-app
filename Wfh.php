<?php $pageTitle = "<h2>Information &nbsp &nbsp</h2> <h3>Please Input your Body Temperature</h3>";
include "common/header.php";
include "script/guardview.php";
?>
<form action="" method="POST">
      

			
			<div class="form-group">
                <label>Body Temperature:</label>
                <input type="text" name="txtBodyTemp"  placeholder="--.-">       
			</div>
<br>

			<br>
			<br>
		<div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnbodyTemp" value="Submit">
          </div>	
			
    </div>  
	</center>
	</form>
<?php include "common/footer.php";?>