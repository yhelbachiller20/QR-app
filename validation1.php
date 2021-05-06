<?php $pageTitle="<h2>Online Health Declaration Form Completed!</h2><br>
<h5>Please take screenshot of this QR code and show it to the gate guard upon entry. </h5>
";?>
<?php include "common/header.php";?>
<?php include "common/connect.php";?>
<?php include "script/session_to_db.php";?>
          <div class="panel-body"><center>
		  <img src="<?php echo $config['url_base'].'generateqr.php?type=checklist&id='.$keyHash;?>"/>
		  
		<br>

		 <form action="home.php" method="post">
		<input type="submit" name="ok" value="ok">
		</form>
		
		

</center>		
</body>
</html>










