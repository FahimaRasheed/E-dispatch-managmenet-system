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
	$course=$_POST['course'];
  $reg=$_POST['reg'];
  $name=$_POST['name'];
  $bank=$_POST['bank'];
  $accno=$_POST['accno'];
  $ifsc=$_POST['ifsc']; 
  $amt=$_POST['amt'];
	
	
		$qrys="insert into caution(regno,course,name,bankname,accno,ifsc,amount,date)values('$reg','$course','$name','$bank','$accno','$ifsc','$amt',curdate())";
	
	
	if (mysqli_query($conn,$qrys))
	{
		// echo "Logined Succesfully";
		// header('location:main.html');
		header("location:caution.html");


	}
	else
	{
		echo "Incorrect Password";
	}
	mysqli_close($conn);
}
if (isset($_POST['saved'])) 
{
	$course=$_POST['course'];
  $reg=$_POST['reg'];
  $name=$_POST['name'];
  $bank=$_POST['bank'];
  $accno=$_POST['accno'];
  $ifsc=$_POST['ifsc']; 
  $amt=$_POST['amt'];
$qrys="update caution set course='$course',name='$name',bankname='$bank',accno='$accno',ifsc='$ifsc',amount='$amt',date=curdate() where regno='$reg'";
	
	
	if (mysqli_query($conn,$qrys))
	{
		// echo "Logined Succesfully";
		// header('location:main.html');
		header("location:caution.php");


	}
	else
	{
		echo "Incorrect";
	}
	mysqli_close($conn);
}
?>

	<!DOCTYPE html >
<html>
<head>
<title>Caution Deposite</title>
<link rel="stylesheet" type="text/css" href="sampl.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<style type="text/css">
	.open-button {
  background-color: #1c7575;
  color: white;
  margin-top: 18px;
  margin-left: 800px;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: absolute;
  /*bottom: 23px;*/
  right: 500px;
  width: 200px;
}
#myForme{
	display: none;
}
  .form-popup {
  display: block;
  position: relative;
  bottom: 0;
  right: 5px;
  /*border: 3px solid grey;*/
  z-index: 9;
  margin-top: 8px;
  margin-left: 80px;
  width: 150px;
  height: 150px;
  color: black;
  z-index: 1;
}
.form-popups {
  display: none;
  position: relative;
  bottom: 0;
  right: 5px;
  /*border: 3px solid grey;*/
  z-index: 9;
  margin-top: 8px;
  margin-left: 80px;
  width: 150px;
  height: 150px;
  color: black;
  z-index: 1;
}

.fpopup {
  display: block;
  position: relative;
  bottom: 0;
  right: 5px;
  /*border: 3px solid grey;*/
  z-index: 9;
  margin-top: 0px;
  margin-left: -180px;
  width: -50px;
  height: 0px;
  color: black;
}
table{
  border: 1px solid grey;
  background-color: transparent;

}
#btns{
	margin-top: 4px;
	width: 150px;
	height: 40px;
	background-color: #1c7575;
	border: 2px solid #1c7575;
	color: white;
  
}
.form-container {
  width: 150px;
  height: 150px;
  max-width: 820px;
  /*padding: 30px;*/
  background-color: transparent;
  margin:0 5px 0 0;
}
.form-cont {
  width: 185px;
  height: 450px;
  max-width: 820px;
  /*padding: 30px;*/
  background-color: #DCDCDC;
  margin:0 5px 0 0;
}
.form-container input[type=text], .form-container select, .form-container option,.form-container textarea {
  width: 650px;
  height: 30px;
  padding: 5px;
  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;
}
.form-container input[type=text]:focus,input[type=date]:focus, .form-container select:focus, .form-container option:focus,.form-container textarea:focus {
  background-color: #ddd;
  outline: none;}
.form-container .btn {
  background-color: #209D9D;
  color: white;
  padding: 16px 29px;
  border: none;
  cursor: pointer;
  width: 100px;
  margin-bottom:10px;
  opacity: 0.8;
  /*align-items: center;*/

}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #209D9D;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
  .div1{
    background-color: white;
    color: white;
    width: 980px;
    height: 600px;
    /*margin-top: -330px;
    */margin-top: -330px;
    margin-left: -45px;
    z-index: 1;
  }
  
  
</style>
</head>
<body>
  <!-- <div class="first"></div> -->
  <!-- <div class="body"> -->
    

<div id="wrapper">
   <div id="header">

    <!-- <div id="logo"> -->
    <ul style="margin-left: 0px;">
        <!-- <li></li> -->
        <!-- <li></li> -->
      <img src="Pondy_Univ_logo.png" style="width: 50px;height: 50px;;margin-top: -13px;margin-left: 25px;">
        <h2 style="margin-left: 10px;margin-top: -5px;">Pondicherry University</h2>
        <li></li>
        <li class="active" style="margin-left: 50px;margin-top: 0px;"><a href="main.html"><i class="fas fa-home"></i>Home</a>

        </li>
        
        <li style="margin-top: 0px;"><a href="logins.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>
      </ul>
    </div>
    
    <!-- </div>  -->
<div class="fpopup" id="Form">
  <form class="form-cont">
    
  </form>
</div>

  <div id="menu"> 
    <!-- <div class="divv">hello</div> -->
<!-- <div class="hy">fvtg</div> -->
      <ul>
        
        <li>

          <input type="checkbox" id="check" onclick="">
                  <label for="check">
                
                <i class="fas fa-bars" id="btn"></i>
              
                <i class="fas fa-times" id="cancel"></i>
                <!-- <button class="open-button" onclick="openForm()">Open Form</button> -->
                <div class="search">
                    <!-- <form action="" class="search-bar"> -->
                      <button type="button" class="btn cancel" id="btns" name="view" onclick="openss()">View Caution Deposit</button>
                      <!-- <button type="submit" name="submit" onclick="opens()" value=""><img src="s.jpg"> -->
                      <!-- </button> -->
                    <!-- </form> -->
                    </div>
                    <!-- <div><button type="reset" class="btn cancel" name="view" onclick="edits()" style="margin-left: 350px; margin-top: 20px;width: 50px;height: 40px;background-color: #1c7575;
  color: white; border: 2px solid #1c7575;">Edit</button></div> -->
                  </label>
                    
           <div class="sidebar" id="sidebar">
            <div class="hy"></div>
                  <header>Dept of CS</header>
                  <ul>
              
              <li>
              
              <a href="dispatchtry1.php">Dispatch</a>
              
            </li>
            <li>
              
              <a href="inbox.html">Inbox</a>
              
            </li>

            <li>
              
              <a href="sam.php">Scholarship</a>
              
            </li>

            <li>
              
              <a href="report.php">Report</a>
              
            </li>

            <li>
              
              <a href="addemp.html">Add Employee</a>
              
            </li>

            <li>
            <a href="certificate.html">Certificates</a>
              <!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
            </li>
            <li>
              
              <a href="caution.php">Caution Deposit</a>
              <!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
            </li>

            </ul> 
                   </div>
                   </li>
                   
               </ul>

    <br class="clearfix" />
  
<div class="div1">



<!--  -->


    

<!--  -->
    <div class="form-popup" id="myForm">
  <form method="post" action="caution.php" class="form-container">
  	<!-- <h1 style="color: black;margin-top: 6px;margin-left: 15px;">CAUTION DEPOSIT</h1> -->
 <table>
 	<tr><br></tr>
 	<tr><br></tr>
<tr><td>
    <label for="name">Course</label></td><td>
    <select name="course">
      <option>MCA</option>
      <option>MSc Computer Science</option>
      <option>Mtech</option>
    </select></td>
</tr>
<tr><td>
    <label for="reg">Register No.</label></td><td>
    <input type="text" placeholder="Enter the register no" name="reg" value="" required><br></td>
    </tr>
<tr><td>
    <label for="name">Name</label></td><td>
    <input type="text" placeholder="Enter the name" name="name" required></td>
</tr>
<tr><td>
    <label for="bank">Bank Name</label></td><td>
    <input type="text" placeholder="Bank Name" name="bank" required>
</tr>
<tr>
  <td><label for="accno">Account Number</label></td>
  <td><input type="text" name="accno" placeholder="Account Number"></td>
</tr>
    <tr><td>
    <label for="ifsc">IFSC Code</label></td><td>
      <input type="text" name="ifsc" placeholder="IFSC Code"/>
</td>
    </tr>
    

    
    <tr><td><label for="amt"> Amount</label></td>
      <td><input type="text" name="amt"></td></tr>
    <tr><td>
<button type="submit" class="btn" onclick="openbtn()" name="create">Create Document</button></td><td>
<button type="reset" class="btn cancel" name="view" onclick="closeForm()">Close</button></td></tr>

    </table>
    
  </form>

</div>
<div class="form-popup" id="myForme">
  <form method="post" action="caution.php" class="form-container">
 <table border="1" cellpadding="3" cellspacing="0">
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
  
	
	
		$qrys="select * from caution order by date";
	
	
	$result=$conn->query($qrys);
    
    if ($result->num_rows > 0) {
    echo"<tr><th>Register Number</th><th>Name</th><th>Course</th><th>Bank Name</th><th>Account Number</th><th>IFSC</th><th>Amount</th><th>Date</th></tr>";
    while ($row=$result-> fetch_assoc()) {
  
      echo "<tr><td>".$row["regno"]."</td><td>".$row["name"]."</td><td>".$row["course"]."</td><td>".$row["bankname"]."</td><td>".$row["accno"]."</td><td>".$row["ifsc"]."</td><td>".$row["amount"]."</td><td>".$row["date"]."</td></tr>";
      echo"<br/>";
    }
    }
    else{
      echo "No data found";
    }
  
  

$conn->close();
	?>
<!-- <button type="submit" class="btn" onclick="openbtn()" name="create">Create Document</button></td><td> -->

    </table>
    <tr><td>
<button type="reset" class="btn cancel" name="view" onclick="closee()" style="margin-left: 350px; margin-top: 4px;">Close</button></td></tr>
  </form>

</div>

<div class="form-popups" id="myedit">
 <form method="post" action="caution.php" class="form-container">
  	<!-- <h1 style="color: black;margin-top: 6px;margin-left: 15px;">CAUTION DEPOSIT</h1> -->
 <table>
<tr><td>
    <label for="name">Course</label></td><td>
    <select name="course">
      <option>MCA</option>
      <option>MSc Computer Science</option>
      <option>Mtech</option>
    </select></td>
</tr>
<tr><td>
    <label for="reg">Register No.</label></td><td>
    <input type="text" placeholder="Enter the register no" name="reg" value="" required><br></td>
    </tr>
<tr><td>
    <label for="name">Name</label></td><td>
    <input type="text" placeholder="Enter the name" name="name" required></td>
</tr>
<tr><td>
    <label for="bank">Bank Name</label></td><td>
    <input type="text" placeholder="Bank Name" name="bank" required>
</tr>
<tr>
  <td><label for="accno">Account Number</label></td>
  <td><input type="text" name="accno" placeholder="Account Number"></td>
</tr>
    <tr><td>
    <label for="ifsc">IFSC Code</label></td><td>
      <input type="text" name="ifsc" placeholder="IFSC Code"/>
</td>
    </tr>
    

    
    <tr><td><label for="amt"> Amount</label></td>
      <td><input type="text" name="amt"></td></tr>
    <tr><td>
<button type="submit" class="btn" name="saved">Save</button></td><td>
<button type="reset" class="btn cancel" name="view" onclick="closedit()">Close</button></td></tr>

    </table>
    </form>
</div>



<!-- <button type="submit" class="btn" onclick="openbtn()" name="create">Create Document</button></td><td> -->

    
</div>

<div id="page-bottom">
    <div id="page-bottom-content">



    </div>
    <div id="page-bottom-sidebar">

    </div>
    <br class="clearfix" />
  </div> 
  </div> 

</div>






<script type="text/javascript">
  function fun1()
  {
    document.getElementById("myForm").style.display = "block";
  }
  function savess()
  {
    document.getElementById("savedd").style.display = "block";
  }
  function edits()
  {
    document.getElementById("myedit").style.display = "block";

  }
  function toggleField(hideObj,showObj){ 
    hideObj.disabled=true; hideObj.style.display='none'; 
    showObj.disabled=false; 
    showObj.style.display='inline'; 
    showObj.focus(); 
  }
  function openForm() {

  document.getElementById("myForm").style.display = "block";
}
function openss() {

  window.location.href="viewcaution.php";
}
 
function closeForm() {
  // document.getElementById("myForm").style.display = "none";
  window.location.href="caution.php";
}
function closedit() {
  document.getElementById("myedit").style.display = "none";
}
function closee() {
  document.getElementById("myForme").style.display = "none";
}

function yesno(that){
  if(that.value=='job'){
    document.getElementById('yes').style.display="block";

  }else{
    document.getElementById('yes').style.display="none";
  }
}

</script>

</body>
</html>


