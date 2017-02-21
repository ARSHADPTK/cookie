<html>
<body>
<center>
<table border="4" bgcolor="orange" cellspacing="0" bordercolor="black" width="30%" height="20%">
<form action="" method="post">
<tr>
<th>User Id:</th><th><input type="text" name="txtuser"></th></tr>
<tr><th>Password:</th><th><input type="text" name="txtpass"></th>
</tr>
<tr>
<th colspan="2">
<input type="checkbox" name="cx1">Remember me
<input type="submit" value="ok" name="btnok">
</th>
</tr>
</form>
</table>
</center>
</body>
</html>


<?php
if(isset($_POST['btnok']))
{
if(isset($_POST['cx1'])) 
{
$a=$_POST['txtuser'];
$b=$_POST['txtpass'];
setcookie("ck", $a, time()+3600);
echo "WELCOME";
}
else if($_POST['txtuser']==$_COOKIE["ck"])
{
echo "WELCOME" ." ". $_COOKIE["ck"];
}
}
?>
