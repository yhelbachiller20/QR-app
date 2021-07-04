<?php
$pageTitle = "Health Checklist";
include "common/header.php";
?>
<?php include 'script/hc1-model.php'; ?>
<script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

    <div class="panel-body"></center>

    <p style="font-size:15px">1. Are you experiencing the following symptoms at present or for the past two (2) weeks?<br>
        (Nakakaranas ka ba ng mga sumusunod na sintomas ngayon at sa nakaraang dalawang (2) linggo?):
    </p> 
    <p style="font-size:15px">
        - Sore Throat (Pananakit ng lalamunan/masakit lumunok) <br>
        - Body pains (pananakit ng katawan)<br>
        - Headache ( pananakit ng ulo)<br>
        - Fever (lagnat)<br>
        - Cough (ubo)<br>
        - Colds (sipon)<br>
        - Diarrhea (pagtatae)<br>
        - Loss of smell or taste (pagkawala ng pang amoy at panlasa)
        <br></p>
    <form action="" method="post">
        <input type="submit" class="btn btn-warning" name="btnYes" value="Yes" style="float:left;padding-left: 7px;margin-left: 13px;margin-right: 0px;">
        <input type="submit" class="btn btn-primary" name="btnNo" value="No" style="float:right;margin-right: 13px;">
        <input type="hidden" name="log_type" value="<?php echo isset($_GET['log_type']) ? $_GET['log_type'] : ""; ?>"/>
    </form>


</form>
</div>
<?php include "common/footer.php"; ?>