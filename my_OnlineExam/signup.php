<html>
<head>
<title>New User Signup</title>
<script src="formValidations.js"></script>
<style type="text/css">
.formStyle1{
	color: #6633CC;
	font-weight: bold;
}
.formStyle2{
	color: #993300;
	font-weight: bold;
}
</style>
<body>
<?php
include("header.php");
?>
<table width="132" rowspan="2" valign="top"><span class="formStyle1">
<tr><td><img src="images/signup.jpg" width="131" height="155"></span></td></tr>
<tr><td width="468" height="57"><h1 align="center"><span class="formStyle1">New User Signup</span></h1></td></tr>
<tr>
<td> <!-- boforeForm "td" -->
<form name="form1" method="post" onSubmit="return formValidations();" action="signupuser.php">
<table width="301" border="0" align="left"><!-- After form table -->
<tr>
<td><div align="left" class="formStyle2">Login Id</div></td>
<td><input type="text" name="loginid"></td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Password</div></td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Confirm Pwd</div></td>
<td><input type="password" name="cpwd"></td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Name</div></td>
<td><input type="text" name="uname"></td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Address</div></td>
<td><input type="text" name="address"></td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Country</div></td>
<td><select name="country">
<option selected="" value="Default">(Please select a country)</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select>
</td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Zip</div></td>
<td><input type="text" name="zip"></td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Phone</div></td>
<td><input type="text" name="phone"></td>
</tr>
<tr>
<td><div align="left" class="formStyle2">Email</div></td>
<td><input type="text" name="email"></td>
</tr>
<td>&nbsp;</td> <!-- for nbspace from left side of signup button -->
<td><input type="submit" name="submit" value="signup">
</td><!-- beforeForm "td" -->
</tr>
</table><!-- After form table -->
</form></td>
</tr>
</table>
<p>&nbsp; </p>
</body>
</html>
