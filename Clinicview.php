<?php
$offset = 0;
$per_page = 10;
if (isset($_GET['page'])) {
    $offset = $_GET['page'] * $per_page;
}
$hasNextLink = true;
$dateSearchValue = "";
$dateQuery = "";
if (isset($_GET['date_search']) && !empty($_GET['date_search'])) {
    $dateQuery = "WHERE DATE(created_at) = '" . $_GET['date_search'] . "'";
    $dateSearchValue = $_GET['date_search'];
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Report</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-swidth, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
        img#AA {
            float: left;
        }

        div.panel-heading{
            padding-bottom: 15px;
        }	

        .text-center{
            text-align: center;
        }
        table, th, td {
            border: 1px solid black;

        </style>
        <body>
<!--	<h1><?php echo $_GET["offset"]; ?></h1> -->
            <div class="panel panel-primary">		
                <div class="panel-heading text-center">
                    <img src="AA.png" id="AA" style="width:70px;height:70px;">
                    <h2 class="text">Clinic</h2>
                </div>
                <div style="overflow-x:auto;">
                    <?php
                    /* Attempt MySQL server connection. Assuming you are running MySQL
                      server with default setting (user 'root' with no password) */
                    $link = mysqli_connect("localhost", "root", "", "checklist");

                    // Check connection
                    if ($link === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }

                    // Attempt select query execution
                    //$sql = "SELECT * FROM visitor";
                    $sql = "SELECT * FROM visitor $dateQuery LIMIT $per_page OFFSET $offset";
                    //$sql = "SELECT * FROM visitor LIMIT 10 OFFSET 0";
			$countSql = "SELECT count(*) as visitorCount FROM visitor $dateQuery";
			$countResult =  mysqli_fetch_array(mysqli_query($link, $countSql));
		//var_dump($countSql);
			$countSql = "SELECT count(*) as employeeCount FROM visitor $dateQuery AND type = 20;";
			$countEmployee =  mysqli_fetch_array(mysqli_query($link, $countSql));
			$countSql = "SELECT count(*) as employeeCount FROM visitor $dateQuery AND log_type = 30;";
			$countEmployeeWFH =  mysqli_fetch_array(mysqli_query($link, $countSql));
			$countSql = "SELECT count(*) as employeeCount FROM visitor $dateQuery AND log_type = 20 AND type = 20;";
		//	$countEmployeeOnsite =  mysqli_fetch_array(mysqli_query($link, $countSql));
			//$countSql = "SELECT count(*) as employeeCount FROM visitor $dateQuery AND log_type = 10;";
			$countEmployeeSched =  mysqli_fetch_array(mysqli_query($link, $countSql));
			$countSql = "SELECT count(*) as employeeCount FROM visitor $dateQuery AND type = 10;";
			$countVisitor =  mysqli_fetch_array(mysqli_query($link, $countSql));
			$countSql = "SELECT count(*) as employeeCount FROM visitor $dateQuery AND log_type = 20 AND type = 10;";
			$countVisitorOnsite =  mysqli_fetch_array(mysqli_query($link, $countSql));
			$countSql = "SELECT count(*) as employeeCount FROM visitor $dateQuery AND log_type = 10 AND type = 10;";
			$countVisitorSched =  mysqli_fetch_array(mysqli_query($link, $countSql));
			//$countSql ="SELECT * FROM visitor WHERE Body_Temp = ;" ;
			//$countBodyTemp =  mysqli_fetch_array(mysqli_query($link, $countSql));
			//$countSql="SELECT count(*) as employeeCount FROM visitor $dateQuery AND Body_Temp= 0;";
			//$countverified= mysqli_fetch_array(mysqli_query($link, $countSql));
		//	$countSql = "SELECT count(*)  FROM visitor $dateQuery AND WHERE Body_Temp =0 '';";
			//$countunverified =  mysqli_fetch_array(mysqli_query($link, $countSql));
			
			

                    ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <br/>
                            <form method="get" action="">
                                Search Date: <input type="text" value="<?php echo $dateSearchValue; ?>" name="date_search"/>
                                <input type="submit" value="Search"/>
                            </form>
				Note: Search format (YYYY-mm-dd) <br/>
				<br><font color="red">Results found: </font><?php echo $countResult['visitorCount'];?><br/>
				<br>
				<font color="blue">Onsite Employee: </font> <?php echo $countEmployee[0];?><br/>
				<font color="green">WFH Employee: </font> <?php echo $countEmployeeWFH[0];?><br/>
				<font color="purple">Visitor: </font> <?php echo $countVisitorOnsite[0]+$countVisitorSched[0];?><br/>
				<!--<font color="Gold">Unverified:</font><?php echo $countverified[0];?><br/>
				<font color="red">Verified:</font><?php echo $countunverified[0];?><br/>--!>
				<!--Onsite Employee: <?php echo $countEmployeeOnsite[0];?><br/>
				Scheduled Employee: <?php echo $countEmployeeSched[0];?><br/>--!>
			<!--	<font color="blue">Onsite Employee: </font><?php echo $countEmployeeSched[0]+$countEmployeeOnsite[0];?>--!><br/>
				<!--Onsite Visitor: <?php echo $countVisitorOnsite[0];?><br/>
				Scheduled Visitor: <?php echo $countVisitorSched[0];?><br/>--!>
		
				

<br>
                            <br/>
                        </div>
                    </div>
                    <?php
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<div class = 'col-md-12 col-sm-12'>";
                            echo "<table class = 'table table-striped'>";
                            echo "<tr>";
                            //		echo "<th>id</th>";
                            echo "<th>Last Name</th>";
							echo "<th>First Name</th>";
							echo "<th>log_type</th>";
                            //echo "<th>Gender</th>";
                            //echo "<th>Address</th>";
                            //echo "<th>Email</th>";
                            //echo "<th>Contact Number </th>";
                            //echo"<th> Department to Visit </th>";
                            //echo"<th> Person to Visit </th>";
                            //echo"<th> Reason to Visit </th>";
                            //echo"<th> From </th>";
                            //echo"<th> To </th>";
                            echo"<th>Question 1 </th>";
                            echo"<th>Question 2 </th>";
                            echo"<th>Question 3 </th>";
                            echo"<th>Question 4 </th>";
                            echo"<th> Country </th>";
                            echo"<th> Question 5 </th>";
                            echo"<th> Town </th>";	
                            echo"<th> Form Created at</th>";
                            echo"<th>Body Temperature</th>";
							echo"<th>Verification</th>";
						//	echo"<th></th>";
						
                        //    echo"<th>&nbsp; </th>";
                            echo "</tr>";
                            echo "<tbody>";
						
                            while ($row = mysqli_fetch_array($result)) {
                                $typeLabel = $row["type"] == 10 ? "Visitor" : "Employee";
								
							//echo "<tr>";
                                //	echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['last_name'] . "</td>";
								echo "<td>" . $row['first_name'] . "</td>";
								if ($row["type"]==10) {
									  echo "<td><font color=purple>" . $typeLabel .  "</font></td>";
									} elseif ($row["type"]==20){
									  echo "<td><font color=blue>" . $typeLabel .  "</font></td>"; 
									}
									elseif ($row["log_type"]==30){
									  echo "<td><font color=green>" . $typeLabel .  "</font></td>"; 
									}
                                //echo "<td>" . $row ['Gender'] . "</td>";
                                //echo "<td>" .$row['Address']. "</th>";
                                //echo "<td>" . $row['Email'] . "</td>";
                                //echo "<td>" . $row['Contact_Number'] . "</td>";	
                                //echo "<td>" . $row['Department'] . "</td>";
                                //echo "<td>" . $row['person_to_visit'] . "</td>";
                                //echo "<td>" . $row['reason_to_visit'] . "</td>";
                                //echo "<td>" . $row['From_visit'] . "</td>";
                                //echo "<td>" . $row['To_visit'] . "</td>";
								
                                echo "<td>" . $row['Question1'] . "</td>";
                                echo "<td>" . $row['Question2'] . "</td>";
                                echo "<td>" . $row['Question3'] . "</td>";
                                echo "<td>" . $row['Question4'] . "</td>";
                                echo "<td>" . $row['q4txt'] . "</td>";
                                echo "<td>" . $row['Question5'] . "</td>";
                                echo "<td>" . $row['q5txt'] . "</td>";
                                echo "<td>" . $row['created_at'] . "</td>";
								echo "<td>" . $row['Body_Temp'] . "</td>";
                                $verification = $row["Body_Temp"] == 0 ? "Unverified" : "Verified";
								if (empty($row["Body_Temp"])) {
									  echo "<td><font color=purple>" . $verification .  "</font></td>";
								}
								 else {
									  echo "<td><font color=blue>" . $verification .  "</font></td>"; 
									}
                                echo "<td><a href = 'view_visit_details.php?id=" . $row["id"] . "' > View</a></td>";
						//		echo "<td><a href = 'delete.php?id=" . $row["id"] . "' ><img src=delete.png style=width:30px;height:20px;></a></td>";
								

                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            $hasNextLink = false;
                            echo "No records matching your query were found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                    <?php if (isset($_GET['page']) && $_GET['page'] >= 1) { ?>
                        <a href="Clinicview.php?page=<?php echo $_GET['page'] - 1;
                        ?>&date_search=<?php echo $dateSearchValue; ?>">< PREV</a>
                       <?php } ?>
                       <?php if ($hasNextLink) { ?>
                        <a href="Clinicview.php?page=<?php echo $_GET['page'] + 1; ?>&date_search=<?php echo $dateSearchValue; ?>">NEXT ></a>
                    <?php } ?>
                    <br>

                    <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>


                </div>
                <?php include "common/footer.php"; ?>
