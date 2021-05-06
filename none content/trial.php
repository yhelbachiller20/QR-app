<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>

</head>
<script>
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}</script>
<body>
 
Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"><br>
    <div id="ifYes" style="visibility:hidden">
        If yes, explain: <input type='text' id='yes' name='yes'><br>
    </div>
        
 
</body>
</html>
