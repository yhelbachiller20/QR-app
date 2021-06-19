<?php $pageTitle = 'Please  fill out this'. "<br>".'Health Declaration form properly. '; ?>
<?php 
include 'common/header.php';
include 'script/visitorlogs.php'; 
?>

<form action="" method="post">
            <div class="form-group"><br />
			 <label>&nbsp &nbsp Last Name:</label>
                <input type="text" <?php echo $last_name;?> name="last_name" class="form-control" placeholder="Lastname">
				*<?php echo $lastname_error;?>
            </div> 
			<div class="form-group">
                <label> &nbsp &nbsp First Name:</label>
                <input type="text" value="<?php echo $first_name;?>" name="first_name" class="form-control" placeholder="Firstname">
				*<?php echo $firstname_error;?>
            </div> 
			<div class="form-group">
                <label>&nbsp &nbsp Address:</label>
                <input type="text" value="<?php echo $Address;?>" name="Address" class="form-control" placeholder="Complete Address">
				*<?php echo $Address_error;?>
			</div>
			<div class="form-group">
                <label>&nbsp &nbsp Email Address:</label>
                <input type="email" value="<?php echo $Email;?>" name="Email" class="form-control" placeholder="Email Address">
				*<?php echo $Email_error;?>
            </div>    

			<div class="form-group">
                <label>&nbsp &nbsp Contact Number:</label>
                <input type="number" value="<?php echo $Contact_Number;?>" name="Contact_Number"class="form-control" placeholder="Cellphone/Phone Number">
				*<?php echo $Contact_Number_error;?>
            </div>    
			<div class="form-group" style="margin-bottom: 22px;padding-right: 25px; padding-left: 26px;border-left-width: 10px;">
				 <label for="No" class="radio-inline">
				 <input type="radio" name="Gender" value="Female"id="No"/> Female</label>
				 &nbsp &nbsp <input type="radio" name="Gender" value="Male" id="No"/> Male</label>
						*<?php echo $Gender_error;?>				 
					<br>
					<br>
			
				<input type="submit" class="btn btn-primary" name="back" value="Previous" style="float:left">
				<input type="submit" class="btn btn-primary" name="btnNext" value="Next" style="float:right">
			<br>
			<br />
				<center>
			<a href="consent.php">View Privacy Statement</a>.</p>
				</center>
    </div>   
				</form>
<?php include "common/footer.php";?>