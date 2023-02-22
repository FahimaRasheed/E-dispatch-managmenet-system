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

if (isset($_POST['scholarship'])) 
{
  $course=$_POST['course'];
  $regno=$_POST['reg'];
  $name=$_POST['name'];
  $addr=$_POST['addr'];
  $phone=$_POST['phn'];
  $category=$_POST['cat'];
  $sname=$_POST['sc'];
  
  
  
    $qrys="insert into scholarship(course,regno,name,addr,phone,category,sname)values('$course','$regno','$name','$addr','$phone','$category','$sname')";
  
  
  if (mysqli_query($conn,$qrys))
  {
    
    echo"Succc";


  }
  else
  {
    echo "Incorrect Password";
  }
  mysqli_close($conn);
}
  

  
  ?>