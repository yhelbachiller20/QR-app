<?php $pageTitle="<h2>Online Health Declaration Form Completed!</h2><br>

";?>
<?php include "common/header.php";?>
<?php include "common/connect.php";?>
<?php include "script/session_to_db.php";?>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script> 


<script type="text/javascript"> alert("We apologize but you are not allowed to proceed and enter the Assumption Antipolo premises. This is In-line with the health protocols of the school.")</script>

