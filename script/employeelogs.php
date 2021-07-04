<?php
	  $lastname_error = "";
	  $firstname_error =""; 
  $lastname = $firstname ="";
  if(isset($_POST['btnNext'])) {
    if (empty($_POST["last_name"])) {
    $lastname_error = "Required";
   } else {
 $last_name =($_POST["last_name"]);
  }

    if (empty($_POST["first_name"])) {
      $firstname_error = "Required";
    } else {
      $firstname_error = ($_POST["first_name"]);
    }
  

	$employeeInfo = [
	'last_name' => $_POST['last_name'], 'first_name' => $_POST['first_name']];
	$_SESSION['employee'] = $employeeInfo;
	$last_name=$_POST['last_name'];
	$first_name=$_POST['first_name'];
	

		 
if($firstname_error !="Required" && $lastname_error !="Required"){
		 header("location: choices.php");
}

//var_dump($_SESSION);
}

?>
