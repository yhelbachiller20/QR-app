<?php
    $num_boxes = 5;
    $precision = 1;
    $gradetext = '';
                    //minimum=>grade
    $grade_array = array(
                    '97'=>'A+',
                    '94'=>'A',
                    '90'=>'A-',
                    '87'=>'B+',
                    '84'=>'B',
                    '80'=>'B-',
                    '77'=>'C+',
                    '74'=>'C',
                    '70'=>'C-',
                    '67'=>'D+',
                    '65'=>'D',
                    '0'=>'F'
                    );



function create_form($num_boxes=1)
{
    if(is_int($num_boxes))
    {
        $form = '';
        for($i=0;$i<$num_boxes;$i++)
        {
            $inc = $i+1;
            $val = (isset($_POST['grade'][$i])) ? $_POST['grade'][$i] : '';
            $form .= "<label for='grade$inc'>Grade $inc:</label><input id='grade$inc' name='grade[$i]' type='number' value = '$val' min='0' max='100' />"; 
        }
        return $form;
    }
}

function get_grade($pc,$grade_array)
{
    foreach($grade_array as $min=>$grade)
    {
        if($pc < $min) continue;
        return $grade;
    }
}

if($_POST)
{
    $GPA = 0;
    $num_posts = count(array_filter($_POST['grade'], "is_numeric"));
    $total = array_sum($_POST['grade']);
    if($num_posts != 0) $GPA = $total/$num_posts;
    $lettergrade = get_grade($GPA,$grade_array);
    $gradetext = "The GPA = " . number_format($GPA,$precision) . " ($lettergrade)";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php echo $gradetext;?>
<form method="post">
    <?php echo create_form($num_boxes);?>
    <input type="submit" value="Calculate" />
</form>
</body>
</html>
