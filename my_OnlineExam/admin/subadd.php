<?php
session_start();
require("../database.php");
include("header.php");
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
echo "<BR>";
echo "<BR><h3 class=head1>Subject Add </h3>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<html>
<head>
<script language="JavaScript">
function check(){
var subnm=document.form1.subname.value;
var letters = /^[A-Za-z]+$/;
if(!subnm.match(letters) || subnm.length<3 || subnm.length>12)
{
	alert("Name contain 3-12 Alphabets letters .");
	document.form1.subname.focus();
	return false;
}
return true;
}
</script>
<title>Add Subject</title>
</head>
<body>
<form name="form1" method="post" action = "<?php echo $_SERVER['PHP_SELF']?>" onSubmit="return check();" > 
  <table width="41%"  border="0" align="center">
    <tr>
      <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input type="text" name="subname" />
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnsubmit" value="Add" /></td>
    </tr>
  </table>
</form>
</td>
</td>
</body>
</html>
<?php
extract($_POST);
echo "<table width=100%>";
echo "<tr><td align=center></table>";
if(isset($btnsubmit)) 
{
if(strlen($subname)>0 )
{
$rs=mysql_query("select * from mst_subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
mysql_query("insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysql_error());
echo "<p align=center>Subject  <b>'$subname'</b> Added Successfully...</p>";
}
	}
?>
<p>&nbsp; </p>
