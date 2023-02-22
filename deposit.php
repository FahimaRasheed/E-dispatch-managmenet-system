<!DOCTYPE html>
<html>
<head>
	<title>Banking System deposit</title>
	<style type="text/css">
		form{
			text-align: center;
			margin-top: 200px;

		}
		input{
			height: 20px;
		}
	</style>
</head>
<body>
	<form action="deposit.php" method="post">
		<h4>DEPOSIT </h4>
		<label><b>Enter the Account Number </b></label>
		<input type="text" name="accno" value="" style="margin-left: 60px;" required><br><br>
		<label><b>Enter the Amount to be Deposited </b></label>
		<input type="text" name="deposit" value="" style="margin-left: 20px;" required><br><br>
		<input type="submit" name="submit" style="background-color: navy;border:none;color: white;">
	</form>
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
	$acc=$_POST['accno'];
	$deposit=$_POST['deposit'];

	$depo=number_format($deposit);
    // $sql="select balance from login where accno='$acc'";
   //  $result = mysqli_query($conn, $sql);
   //  $row = mysqli_fetch_array($result, 'MYSQLI_ASSOC'); 
   // $quantity = $row['quantity'];
    // $res=number_format($sql);
    // $total=$quantity+$depo;
    


	$qry="update login set balance='balance'+'.$depo.' where accno='$acc'";
	if (mysqli_query($conn,$qry))
	{
		 echo '<script>
	alert("Successfull ");
window.location.href="deposit.php";
</script>';
	}
	else
	{
		echo "Error :". $sql . "" . mysql_error($conn);
	}
	mysqli_close($conn);
}
?>

</body>
</html>