<?php
$servername="localhost";
$username="root";
$password="codes22";
$dbname="edispatch";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("Connection Failed" . mysql_connect_error());
}
if (isset($_POST['submit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['pwd'];
	$qry="select username,password from login where username='$username' and password='$password'";
	if (mysqli_query($conn,$qry))
	{
		echo "Logined Succesfully";

	}
	else
	{
		echo "Not Connected";
	}
	mysqli_close($conn);
}

?>
