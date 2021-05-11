<?php

$pageTitle = "Health Checklist &nbsp &nbsp";
include "common/header.php";
?>
<?php include 'script/hc4-model.php'; ?>

<script>
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.visibility = 'visible';
        } else
            document.getElementById('ifYes').style.visibility = 'hidden';

    }
</script>
<div class="panel-body">
    <p style="font-size:15px">4. Have you travelled outside of the Philippines in the last 14 days? <br>
        (Ikaw ba ay nagbyahe sa labas ng Pilipinas sa nakalipas na labing-apat (14) na araw?)</label>
        <br>
    <center>			  
        <form action="" method="post">
            Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="Yes">
            &nbsp
            &nbsp 
            &nbsp
            &nbsp
            &nbsp
            &nbsp
            No  <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="NO"><br>
            <div id="ifYes" style="visibility:hidden">
                If yes, please indicate: <input type='text' id='yes' name='yesTxt'><br>
            </div>

            <br>
            <input type="submit"  class="btn btn-primary" name="choices" value="Submit">

            </center>
        </form>
</div>
<?php include "common/footer.php"; ?>