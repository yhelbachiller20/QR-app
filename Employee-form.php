<?php $pageTitle = 'Please  fill out this'. "<br>".'Health Declaration form properly. '; ?>
<?php 
include 'common/header.php';
include 'script/employeelogs.php';

?>

<form action="" method="post">
          <div class="form-group">
		  	<center>Note: All data are required to be filled.</center>
<!--<center><font size="5">*</font>  - </b>/<?php echo $firstname_error;?></center>-->
			 <label>&nbsp &nbsp Last Name: <font size="4">*</font> </label>
                <input type="text" name="last_name" class="form-control"  placeholder="Last Name">
				
            </div> 
			<div class="form-group">
		<!--	<br>&nbsp; &nbsp; *<?php echo $lastname_error;?><br>-->
                <label> &nbsp &nbsp First Name: <font size="4">*</font></label>
                <input type="text" name="first_name" class="form-control"  placeholder="First Name">
		
            </div> 
				
				<input type="submit" class="btn btn-primary" name="btnNext" value="Next" style="float:right;margin-right: 12px;">
				<input type="submit" class="btn btn-primary" name="back" value="Previous" style="float:left;padding-left: 12px;border-left-width: 5px;margin-left: 8px;margin-right: 0px;">
			<br>
			<br />
				<center>
			
			<a href="Econsent.php">View Privacy Statement</a>.</p>
				</center>
    </div>   
				</form>
				
<?php include "common/footer.php";?>
