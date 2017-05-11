function formValidations()
{
var lgnid=document.form1.loginid.value.length;
if(lgnid<5 || lgnid>10)
{
alert("Login Id is 5-10 character long .");
document.form1.loginid.focus();
return false;
}
var pass=document.form1.pwd.value.length;
if(pass<5 || pass>10)
{
alert("Password is 5-10 character long .");
document.form1.pwd.focus();
return false;
}
var cpass=document.form1.cpwd.value.length;
if(cpass==0)
{
alert("Please Enter the Confirm Password . ");
document.form1.cpwd.focus();
return false;
}
if(document.form1.pwd.value!=document.form1.cpwd.value)
{
alert("Confirm Password Does Not Match .");
document.form1.cpwd.focus;
return false;
}
var unm=document.form1.uname.value;
var letters = /^[A-Za-z]+$/;
if(!unm.match(letters) || unm.length<6 || unm.length>20)
{
	alert("Name contain 6-20 Alphabets letters .");
	document.form1.uname.focus();
	return false;
}
var ucntry=document.form1.country.value;
if(ucntry=="Default")
{
	alert("Please Select Some Country . ");
	document.form1.country.focus();
	return false;
}
var uadrs=document.form1.address.value;
var letters = /^[0-9a-zA-Z]+$/;
if(!uadrs.match(letters) || uadrs.length<10 || uadrs.length>30)
{
	alert("Address should be 10-30 AlphaNumeric Only . ");
	document.form1.address.focus();
	return false;
}
var uzp=document.form1.zip.value;
var numbers = /^[0-9]+$/;
if(!uzp.match(numbers) || uzp.length!=6)
{
	alert("Zip code must have 6 numeric characters only .");
	document.form1.zip.focus();
	return false;
}
var uphn=document.form1.phone.value;
var numbers = /^[0-9]+$/;
if(!uzp.match(numbers) || uphn.length!=10)
{
	alert("Phone number must have 10 numeric characters only .");
	document.form1.phone.focus();
	return false;
}
var ueml=document.form1.email.value;
var mailformat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!ueml.match(mailformat))
{
	alert("Invalid Email . ");
	document.form1.email.focus();
	return false;
}
return true;
}
