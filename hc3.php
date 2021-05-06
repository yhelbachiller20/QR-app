<?php $pageTitle = "Health Checklist &nbsp &nbsp";
include "common/header.php"; ?>
<?php include 'script/hc3-model.php'; ?>

     <div class="panel-body"></center>

            <p style="font-size:15px">3. Have you had any contact with anyone with fever, cough, colds and sore throat in the past two (2) weeks?
<br>			(Mayroon ka bang nakasama na may lagnat, ubo, sipon, o sakit ng lalamunan sa nakalipas na dalawang (2) linggo?) *</label></p>
			<br>
			<form action="" method="post">
				<input type="submit" class="btn btn-warning" name="btnYes" value="Yes" style="float:left;padding-left: 7px;margin-left: 13px;margin-right: 0px;">
					<input type="submit" class="btn btn-primary" name="btnNo" value="No" style="float:right;margin-right: 13px;">
				</form>
  </div>
<?php include "common/footer.php";?>