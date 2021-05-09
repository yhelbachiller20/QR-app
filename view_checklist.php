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
    Gender:&nbsp &nbsp <?php echo $visitor['Gender']; ?><br>
    Date of visit:&nbsp &nbsp	<?php echo DateTImeHelper::dateToHuman($visitor['created_at']); ?><br>
    Visit Time: &nbsp &nbsp<br>
    From: &nbsp &nbsp
    <?php echo DateTImeHelper::timeToHuman($visitor['From_visit']); ?><br>
    To:&nbsp &nbsp<?php echo DateTImeHelper::timeToHuman($visitor['To_visit']); ?><br>
    Department to visit:&nbsp &nbsp<?php echo $visitor['Department']; ?><br>
    Person to visit:&nbsp &nbsp<?php echo $visitor['person_to_visit']; ?><br>
    Reason to visit:&nbsp &nbsp<?php echo $visitor['reason_to_visit']; ?><br>
    <form>
        <div class="form-group"><br>
            <label>Body Temp:</label><input type="text" placeholder="--.-" />
            <div class="form-group"><br>
                <input type="submit" class="btn btn-primary" value="Submit">
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