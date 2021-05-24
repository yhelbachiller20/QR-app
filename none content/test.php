<h1>Test String</h1>
Mahal ni ron si mariel

<br/>
***<br/>
**<br/>
*<br/>


<?php
//UPDATE `tbl_name` SET `column1`="mariel",`column2`="ron" WHERE column1 ="ron"
$arr["first_name"] = 'ron';
$arr["last_name"] = "pedraja";
var_dump($arr);
$arr = ["first_name" => 'ron', 'last_name' => 'pedraja'];
echo "<br/>";
var_dump($arr);

echo  "UPDATE `tbl_name` SET `column1`=".'"'.$arr["name2"].'"'.',`column2`="'.$arr["name1"].'" WHERE column1='.'"'.$arr["name1"].'"';

$bodyTemp = -1;

if ($bodyTemp >= 37.5)
{
	echo 'Failed';
}
else if ($bodyTemp <=37.4)
{
	echo 'Passed!';
}

for($x=1; $x != 100; $x++)
{
	if($x % 2 == 0){
		echo $x." ";
	}
}?>
<br/>
<?php
for($x = 1; $x > 0; $x--){
	for($y = $x; $y > 0; $y--){
		echo "*";
	}
	echo "<br/>";
}
