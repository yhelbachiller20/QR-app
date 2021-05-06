<?php $pageTitle = 'Please  fill out this'. "<br>".'Health Declaration form properly. '; ?>
<?php 
include 'common/header.php';
include 'script/visitorlogs.php'; 
?>



<form action="" method="post">
            <div class="form-group"><br />
			 <label>&nbsp &nbsp Last Name:</label>
                <input type="text" name="last_name" class="form-control" placeholder="Lastname">
            </div> 
			<div class="form-group">
                <label> &nbsp &nbsp First Name:</label>
                <input type="text" name="first_name" class="form-control" placeholder="Firstname">
            </div> 
				
					<br>
					<br>
			
				<input type="submit" class="btn btn-primary" name="back" value="Previous" style="float:left">
				<input type="submit" class="btn btn-primary" name="btnNext" value="Next" style="float:right">
			<br>
			<br />
				<center>
			<a href="Statement.php">View Privacy Statement</a>.</p>
				</center>
    </div>   
				</form>
<?php include "common/footer.php";?>