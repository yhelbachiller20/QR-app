<?php $pageTitle = 'Information Details'; ?>
<?php 
include 'config.php';
include 'common/header.php';
//connect to database
include 'common/connect.php';
//query record id
$sql = "SELECT * FROM visitor WHERE id = ".$_GET['id'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
  $row = $result->fetch_assoc();
  ?>
   <?php 
			if ($row["type"]==10) {
				echo "<center><h1>Visitor Details</h1></center>";
				}
			elseif ($row["type"]==20){
				echo  "<center><h1>Employee Details</h1></center>"; 
				}
?>
<br>
<br>
  <div class="row">
  <div class="col-md-6 col-sm-12">
<p><strong>&nbsp First Name: </strong><?php echo $row['first_name'];?></p>
<p><strong>&nbsp Last Name: </strong><?php echo $row['last_name'];?></p>
 <?php 
			if ($row["type"]==10) {
				echo "<p><strong>&nbsp Gender:&nbsp &nbsp</strong>" . $row["Gender"] .  "</p>";
				}
			elseif ($row["type"]==20){
				echo "";
				}
			if ($row["type"]==10) {
				echo "<p><strong>&nbsp Address:&nbsp &nbsp</strong>" . $row["Address"] .  "</p>";
				}
			elseif ($row["type"]==20){
				echo "";
				} 
			if ($row["type"]==10) {
				echo "<p><strong>&nbsp Email Address:&nbsp</strong>" . $row["Email"] .  "</p>";
				}
			elseif ($row["type"]==20){
				echo "";
				}
				if ($row["type"]==10) {
				echo "<p><strong>&nbsp Contact Number:&nbsp</strong>" . $row["Contact_Number"] .  "</p>";
				}
			elseif ($row["type"]==20){
				echo "";
				}
?>
<p><strong>&nbsp Department to Visit : </strong><?php echo $row['Department'];?></p>
<p><strong>&nbsp Person to Visit : </strong><?php echo $row['person_to_visit'];?></p>
<p><strong>&nbsp Reason to Visit : </strong><?php echo $row['reason_to_visit'];?></p>
	<p><strong>&nbsp From : </strong><?php echo $row['From_visit'];?></p>
<p><strong>&nbsp To : </strong><?php echo $row['To_visit'];?></p>
  </div>
    <div class="col-md-6 col-sm-12">

<p><strong>Question 1 : </strong><?php echo $row['Question1'];?></p>
<p><strong>Question 2 : </strong><?php echo $row['Question2'];?></p>
<p><strong>Question 3 : </strong><?php echo $row['Question3'];?></p>
<p><strong>Question 4 : </strong><?php echo $row['Question4'];?></p>
<p><strong> Country : </strong><?php echo $row['q4txt'];?></p>
<p><strong> Question 5 : </strong><?php echo $row['Question5'];?></p>
<p><strong> Town : </strong><?php echo $row['q5txt'];?></p>
<p><strong> Form Created at: </strong><?php echo $row['created_at'];?></p>
<p><strong>Body Temperature: </strong><?php echo $row['Body_Temp'];?></p>
	</div>
  </div>
 <center> <a href="Clinicview.php"> Back </a> </center>
  <?php
} else {
  echo "0 results";
}
?>


<?php include "common/footer.php";?>