<?php $pageTitle = "Health Checklist";
include "common/header.php";?>
<?php include 'script/hc2-model.php'; ?>
          <div class="panel-body"></center>

	<p style="font-size:15px">2. Have you worked together or stayed in the same close environment of a confirmed COVID-19 case for the past 2 weeks? 
	<br>(May nakasama ka ba o naka trabahong tao na kumpirmadong may COVID-19 sa nakaraang 2 linggo?) *
				</p> 
				<br>
                <form action="" method="post">
				<input type="submit" class="btn btn-warning" name="btnYes" value="Yes" style="float:left;padding-left: 7px;margin-left: 13px;margin-right: 0px;">
				<input type="submit" class="btn btn-primary" name="btnNo" value="No" style="float:right;margin-right: 13px;">
			</form>
	

  </div>
<?php include "common/footer.php";?>