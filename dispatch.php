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
if (isset($_POST['create'])) 
{
	// $id=$_POST['id'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	// $fname=$_POST['fname'];
	$subject=$_POST['subject'];
	
	
	$qry="insert into dispatch(sender,receiver,subject,date,time,type)values('$from','$to','$subject',curdate(),curtime(),'dispatch')";
	if (mysqli_query($conn,$qry))
	{
		 header("location:dispatchs.php");
	}
	else
	{
		// echo "Error :". $sql . "" . mysql_error($conn);
		echo '<script>
	alert("Please Check the Details .");
window.location.href="addemp.html";
</script>';
	}
	mysqli_close($conn);
}
if (isset($_POST['receive'])) 
{
	$from=$_POST['from'];
	$to=$_POST['to'];
	// $fname=$_POST['fname'];
	$subject=$_POST['subject'];
	
	
	$qrys="insert into dispatch(sender,receiver,subject,date,time,type)values('$from','$to','$subject',curdate(),curtime(),'received')";
	if (mysqli_query($conn,$qrys))
	{
		header("location:inbox.html");
		// header('location:main.html');


	}
	else
	{
		// echo "Error :". $sql . "" . mysql_error($conn);
		echo '<script>
	alert("Please Check the Details .");
window.location.href="addemp.html";
</script>';
	}
	mysqli_close($conn);
}
if (isset($_POST['submit'])) 
{
	
	$name=$_POST['name'];
	$incharge=$_POST['incharge'];
	$email=$_POST['email'];
	$phn=$_POST['phn'];
	$usname=$_POST['usname'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	$files=addslashes(file_get_contents($_FILES["upload"]["tmp_name"]));
	// $upload=$_POST['upload'];
	
	if ($pwd==$cpwd) {
		# code...
		$qrys="insert into logins(username,password,name,incharge,email,image,phno)values('$usname','$pwd','$name','$incharge','$email','$files','$phn')";
	}
	
	if (mysqli_query($conn,$qrys))
	{
		// echo "Logined Succesfully";
		header('location:logins.php');


	}
	else
	{
		echo '<script>
	alert("Please Check the Details .");
window.location.href="addemp.html";
</script>';
	}
	mysqli_close($conn);
}
if (isset($_POST['scholarship'])) 
{
    $id=$_POST['id'];
	$name=$_POST['name'];
	$reg=$_POST['reg'];
	$email=$_POST['email'];
	$sc=$_POST['sc'];
	$course=$_POST['course'];
	$period=$_POST['period'];
	$type=$_POST['type'];
	
	
		$qrys="insert into scholarship(id,name,regno,scname,period,type,email)values('$id','$name','$reg','$sc','$period','$type','$email')";
	
	
	if (mysqli_query($conn,$qrys))
	{
		// echo "Logined Succesfully";
		// header('location:main.html');
		header("location:scholarship.html");


	}
	else
	{
		echo "Incorrect";
	}
	mysqli_close($conn);
}

	if (isset($_POST['saved'])) 
{
	// $id=$_POST['id'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	// $fname=$_POST['fname'];
	$subject=$_POST['subject'];
	
	$qry="update dispatch set sender='$from',receiver='$to',subject='$subject',date=curdate(),time=curtime(),type='dispatch' where subject='$subject'";
	if (mysqli_query($conn,$qry))
	{
		 header("location:dispatchs.php");
	}
	else
	{
		echo "Error :". $sql . "" . mysql_error($conn);
	}
	mysqli_close($conn);
}
	
	?>
