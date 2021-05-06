<?php $pageTitle = "For Validation";
include "common/header.php"; ?>
  
		  <br>
		  <center>
        <form action="" method="post">
            <div class="form-group">
			 <label>Ready to scan QR Code now...:</label>
                <input type="text" name="validation" placeholder="Code">
            </div>  </center>
			<center>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
				</center>
            </div>	
			
        </form>
    </div>    
<?php include "common/footer.php";?>