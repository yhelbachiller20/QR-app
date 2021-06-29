
<?php $pageTitle = "Health Checklist";
include "common/header.php"; ?>
<?php include 'script/reject-model.php'; ?>
<script>
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}
</script>
          <div class="panel-body">
            <h1>Not Allowed</h1> 	
  </div>
<?php include "common/footer.php";?>