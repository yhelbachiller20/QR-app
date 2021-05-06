<?php $pageTitle = "Health Checklist";?>
<?php include 'common/header.php';?>
          <div class="panel-body"></center>
		   			<form action="validation1.php" method="post">
            <p style="font-size:15px">5. Have you travelled to any area in NCR aside from your home? (ikaw ba ay nagpunta sa iba pang parte ng NCR o Metro Manila bukod sa iyong bahay?)</label>
				<br><br>
			 <Center>
			Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="yes">
			  &nbsp
			  &nbsp 
			  &nbsp
			  &nbsp
			  &nbsp
			  &nbsp
			No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="no">
			<br>
			</center>
		<div id="ifYes" style="visibility:hidden">
			If yes, Please Indicate: <input type='text' id='yes' name='yesText'><br>
		</div>
	<center>
	<br>

			<input type="submit"  class="btn btn-primary" name="choices" value="Submit">
			</center>
			</form>
  </div>
<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}
</script>
<?php include "common/footer.php";?>