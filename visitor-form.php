<?php $pageTitle = 'Please  fill out this'. "<br>".'Health Declaration form properly. '; ?>
<?php 
include 'common/header.php';
include 'script/visitorlogs.php'; 
?>

<form action="" method="post">
            <div class="form-group"><br />
			<center>Note: All data are required to be filled.</center>
			 <label>&nbsp &nbsp Last Name: <font size="4">*</font>  </label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
				<?php echo $lastname_error;?>
            </div> 
			<div class="form-group">
                <label> &nbsp &nbsp First Name: <font size="4">*</font> </label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
				<?php echo $firstname_error;?>
            </div> 
			<div class="form-group">
                <label>&nbsp &nbsp Address:  <font size="4">*</font> </label>
                <input type="text" name="Address" class="form-control" placeholder="Complete Address">
				<?php echo $Address_error;?>
			</div>
			<div class="form-group">
                <label>&nbsp &nbsp Email Address:<font size="4">*</font>  </label>
                <input type="email" value="<?php echo $Email;?>" name="Email" class="form-control" placeholder="Email Address">
				<?php echo $Email_error;?>
            </div>    

			<div class="form-group">
                <label>&nbsp &nbsp Contact Number: <font size="4">*</font>  </label>
                <input type="number" value="<?php echo $Contact_Number;?>" name="Contact_Number"class="form-control" placeholder="Cellphone/Phone Number">
				<?php echo $Contact_Number_error;?>
            </div>    
			<div class="form-group" style="margin-bottom: 22px;padding-right: 25px; padding-left: 26px;border-left-width: 10px;">
				 <label for="No" class="radio-inline"> 
				 <input type="radio" name="Gender" value="Female"id="No"/> Female</label>
				 &nbsp &nbsp <input type="radio" name="Gender" value="Male" id="No"/> Male</label>
				 <font size="4">*</font> 
						<?php echo $Gender_error;?>				 
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