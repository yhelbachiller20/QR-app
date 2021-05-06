$workScore = $_POST['coursework'];

switch($workScore) {
case $workScore >= 70 and $workScore <= 100:
    echo 'Your Grade is A';
    break;
case $workScore >= 60 and $workScore <= 69:
    echo 'Your Grade is B+';
    break;
case $workScore >= 59 and $workScore <= 60:
    echo 'Your Grade is B';
    break;
default:
echo 'something else':
}