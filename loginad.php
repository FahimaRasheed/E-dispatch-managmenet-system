<?php
$servername="localhost";
$username="root";
$password="codes22";
$dbname="banking";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed" . mysql_connect_error());
}
if (isset($_POST['submit'])) 
{
	$accno=$_POST['accno'];
	$pass=$_POST['pass'];
	
$qry="select accno,password from login where accno='$accno' and password='$pass'";
$result=$conn->query($qry);
	if (mysqli_num_rows($result)>0)
	{
		
		header("location:menu.php");


	}
	else
	{
		echo '<script>
	alert("Incorrect password or username");
window.location.href="login.php";
</script>';

	}

	mysqli_close($con);
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Banking System deposit</title>
	<style type="text/css">
	body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: lightblue;
	text-align: center;
	/*background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);*/
	/*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );*/
	
}
.form{
	margin-top: 200px;}
	</style>

</head>
<body><center>
	<div>
	<form action="loginad.php" method="post" class="form">
		<label><b>LOGIN HERE</b></label><br><br>
		<!-- <table border="1" cellpadding="1px" cellspacing="0px"> -->
	<label><b>Enter the Account Number </b></label>
		<input type="text" name="accno" id="accno" style="color: white;" required><br><br>
		<label><b>Enter the Password </b></label>
		<input type="Password" name="pass" id="pass" style="margin-left: 50px;"><br><br>
		 <a href="deposit.php?depoid='.$accno.'"><input type="submit" name="submit" style="margin-left: 200px;background-color: #6E6E6E;color: white;border:none;height: 30px;width: 50px;" required></a>
		
	</form>
	</center>


</body>
</html>