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
			<div class="form-group">
                <label>&nbsp &nbsp Address:</label>
                <input type="text" name="Address" class="form-control" placeholder="Complete Address">
			</div>
			<div class="form-group">
                <label>&nbsp &nbsp Email Address:</label>
                <input type="email" name="Email" class="form-control" placeholder="Email Address">
            </div>    
			<div class="form-group">
                <label>&nbsp &nbsp Contact Number:</label>
                <input type="number" name="Contact_Number" class="form-control" placeholder="Cellphone/Phone Number">
            </div>    
			<div class="form-group" style="margin-bottom: 22px;padding-right: 25px; padding-left: 26px;border-left-width: 10px;">
				 <label for="No" class="radio-inline">
				 <input type="radio" name="Gender" value="Female"id="No"/> Female</label>
				 &nbsp &nbsp<input type="radio" name="Gender" value="Male" id="No"/> Male</label>	
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