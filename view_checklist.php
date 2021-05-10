<?php $pageTitle = "Visitor Details"; ?>
<?php include "common/header.php"; ?>
<?php include "common/connect.php" ?>
<?php include "script/DateTImeHelper.php" ?>
<?php
$sql = "SELECT * FROM visitor WHERE SHA1(id) = '" . $_GET['id'] . "'";
$result = $conn->query($sql);
$visitor = [];
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $visitor = $row;
        break;
    }
}
?>
<center>
    <h1><?php echo $visitor['first_name'] . ' ' . $visitor['last_name']; ?></h1>
<table style="width:60%">
  <tr>
    <th>Gender:</th>
    <td>  <?php echo $visitor['Gender']; ?> </td>
  </tr>	
  <tr>
    <td><b>Date of visit:</b></td>
    <td><?php echo DateTImeHelper::dateToHuman($visitor['created_at']); ?></td>
  </tr>
  <tr>
    <td><b>Visit hour From:</b></td>
    <td>    <?php echo DateTImeHelper::timeToHuman($visitor['From_visit']); ?><br></td>
  </tr>
 <tr>
  <td><b>Visit hour To:</b></td>
  <td><?php echo DateTImeHelper::timeToHuman($visitor['To_visit']); ?>
  </tr>
  <tr>
  <td><b>Department to Visit:</b></td>
  <td><?php echo $visitor['Department']; ?><br></td>
  </tr>
  <tr>
  <td><b>Person to Visit:</b></td>
  <td><?php echo $visitor['person_to_visit']; ?></td>
  </tr>
  <tr>
  <td><b>Reason to Visit:</b></td>
  <td><?php echo $visitor['reason_to_visit']; ?></td>
  </tr>
  <td><b>Form created:</b></td>
  <td><?php echo $visitor['created_at'];?></td>
  </tr>
</table>
</body>

    <form>
        <div class="form-group"><br>
           <label>Body Temp:&nbsp  </label><input type="text" placeholder=" --.-" />
            <div class="form-group"><br>
			<b> Guard Name:</b>
			<input type="text" placeholder="Guard Name">
			<br>
			<br>
                <input type="submit" class="btn btn-primary" value="Submit">
				<br>
            </div>	
            </center>  
            <?php include "common/footer.php"; ?>
            <!--
            <script type="text/javascript">
            <input id="phone" data-inputmask="'alias': 'phonebe'"/>
            $(document).ready(function(){
            $(":input").inputmask();
            
            
            
            $("#phone").inputmask({
            mask: '999 999 9999',
            placeholder: ' ',
            showMaskOnHover: false,
            showMaskOnFocus: false,
            onBeforePaste: function (pastedValue, opts) {
            var processedValue = pastedValue;
            
            //do something with it
            
            return processedValue;
            }
            });
            });
            </script> -->