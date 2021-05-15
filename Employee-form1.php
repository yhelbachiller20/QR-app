<?php $pageTitle = 'Please  fill out this'. "<br>".'Health Declaration form properly. '; ?>
<?php 
include 'common/header.php';
include 'script/visitorlogs1.php';

?>

<form action="" method="post">
          <div class="form-group"><br />
			 <label>&nbsp &nbsp Last Name:</label>
                <input type="text" name="last_name" class="form-control"  placeholder="Lastname">
				*<?php echo $lastname_error;?>
            </div> 
			<div class="form-group">
                <label> &nbsp &nbsp First Name:</label>
                <input type="text" name="first_name" class="form-control"  placeholder="Firstname">
				*<?php echo $firstname_error;?>
            </div> 
				
				<input type="submit" class="btn btn-primary" name="btnNext" value="Next" style="float:right;margin-right: 12px;">
				<input type="submit" class="btn btn-primary" name="back" value="Previous" style="float:left;padding-left: 12px;border-left-width: 5px;margin-left: 8px;margin-right: 0px;">
			<br>
			<br />
				<center>
			<a href="Statement.php">View Privacy Statement</a>.</p>
				</center>
    </div>   
				</form>
				
<?php include "common/footer.php";?>