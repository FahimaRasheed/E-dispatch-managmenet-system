
<!DOCTYPE html>
<html>
<head>
	<title>Balance</title>
	<style type="text/css">
		.forms{
			margin-top: 200px;
		}
	</style>
</head>
<body>
	<center>
	<form action="balance.php" method="post" class="forms">
		<h4>VIEW BALANCE</h4><br><br>
		<label><b>Enter the Account Number </b></label>
		<input type="text" name="acc"><br><br>
		<input type="submit" name="submit" style="background-color: navy;border:none;color: white;height: 20px;">
	</form>
	</center>
	<table border="1">
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
	$acc=$_POST['acc'];
	// $balance=$_POST['pass'];
	
$qry="select accno,balance from login where accno='$acc'";

$result=$conn->query($qry);
	if ($result->num_rows > 0) {
		echo"
		<tr><td>Account Number</td><td>Balance</td></tr>";
		$row=$result-> fetch_assoc();
	if ($row) {
		# code...
	
		
echo"<tr><td>".$row['accno']."</td><td>".$row['balance']."</td></tr>";
	}}
	else
	{
		echo 'error';
	

	}

	mysqli_close($conn);
}
?></table>
</body>
</html>