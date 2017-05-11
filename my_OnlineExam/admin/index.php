<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<script language="javascript">
/*function goBack() {
window.history.back();
}*/ BACK-WINDOW FUNCTION NOT USE THIS TIME BUT REMEMBER THIS.
</script>
</head>
<body>
<?php
include("header.php");
include("../database.php");
/*
extract($_POST);
if(isset($submit))
{
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']=$loginid;
}												// NOT WORKING DOUGHT.
else if(!isset($_SESSION['alogin']))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
if (isset($_SESSION['alogin']))
{
	echo  "<p class='head1'>Welcome to Admistrative Area </p>";
	echo  "<p align='center' class='style7'><a href='subadd.php'>Add Subject</a></p>";
	echo  "<p align='center' class='style7'><a href='testadd.php'>Add Test</a></p>";
	echo  "<p align='center' class='style7'><a href='questionadd.php'>Add Question </a></p>";
	echo  "<p align='center' class='head1'>&nbsp;</p>";
		exit;
}*/
?>
<h4><a href="../index.php">Home</a></h4>
<p class="head1">Adminstrative Login </p>
<form name="form1" method="post" action="login.php">
<table width="490" border="0">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="images/login.jpg" width="131" height="155"></span></span></td>
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td width="163" class="style2">Login ID</td>
    <td width="149"><input type="text" name="loginid" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input type="password" name="pass" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>
</form>
</body>
</html>

