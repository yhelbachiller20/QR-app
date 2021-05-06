<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    mysql_connect("hostname	", "", ""); 
    mysql_select_db("checklist"); 
    $Lastname = $_POST['lastname'];
	$Firstname = $_POST['firstname'];
	$Address = $_POST['Address'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$gender = $_POST['gender'];
    $query = "INSERT INTO visitor (`last_name`, `first_name`, `Address`, `Email`, `Contact_Number`, `Gender`, `Location`, `From_visit`, `To_visit`, `Question1`, `Question2`, `Question3`, `Question4`, `q4txt`, `Question5`, `q5txt`, `Code`, `created_at`, `Enter_at`, `Body_Temp`) VALUES 
	('$last_name', '$first_name', '$Address', '$Email', '$Contact_Number', '$Gender' '$Location', '$From_visit', '$To_visit', '$Question1', '$Question2', '$Question3', '$Question4', '$q4txt', '$Question5', '$q5txt', '$Code', '$created_at', '$Enter_at', '$Body_Temp')";
	
    mysql_query($query); 
    echo "inserted";
}

?>
