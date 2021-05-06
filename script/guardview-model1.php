<?php
if(isset($_POST['btnGrade'])){
	$Grade= $_POST['txtGrade'];//93
	
	
	if ($Grade>=97 && $Grade <= 100)
{
	echo 'A+ scale 4';
}

 else if ($Grade>=93 && $Grade<=96)
{
	echo 'A';
}
else if ($Grade>=90 && $Grade<=92)
{
	 echo 'B+';
}

}