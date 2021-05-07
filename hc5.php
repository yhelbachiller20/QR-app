<?php $pageTitle = "Health Checklist";?>
<?php include 'common/header.php';?>
<?php include 'script/hc5-model.php'; ?>
<?php var_dump($_SESSION["hc4"]);?>
   <div class="panel-body"></center>
		   <form action="" method="post">
            <p style="font-size:15px">5.Have you travelled to any area in Antipolo aside from your home?<br> (Ikaw ba ay nagpunta sa iba pang parte ng Antipolo bukod sa iyong bahay?)</label>
				<br><br>
			 <Center>
			Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="Yes">
			  &nbsp
			  &nbsp 
			  &nbsp
			  &nbsp
			  &nbsp
			  &nbsp
			No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="No">
			<br>
			</center>
		<div id="ifYes" style="visibility:hidden">
			If yes, please indicate: <input type='text' id='yes' name='yesText'><br>
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