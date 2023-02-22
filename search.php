<!DOCTYPE html >
<html>
<head>
<title>Search</title>
<link rel="stylesheet" type="text/css" href="main.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<style>
  table {
    width: 30px;
    color: grey;
    margin-left: 100px;

  }
  /*form{
  	display: none;
  }*/
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

/* The popup form - hidden by default */
.form-popup {
  display: block;

  position: relative;
  bottom: 0;
  right: 5px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 820px;
  padding: 30px;
  background-color: white;
  margin:0 5px 0 0;
}

/* Full-width input fields */
.form-container input[type=text], .form-container select, .form-container option {
  width: 650px;
  padding: 20px;
  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container select, .form-container option:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #209D9D;
  color: white;
  padding: 16px 29px;
  border: none;
  cursor: pointer;
  width: 100px;
  margin-bottom:10px;
  opacity: 0.8;
  align-items: center;

}

/* Add a red background color to the cancel button */
.form-container .cancel {

  background-color: #209D9D;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


</head>
<body>

	
	<div class="first"></div>
	<div class="body">
<div id="wrapper">
	<div id="header">
		<div id="logo">
		<ul style="margin-left: 380px;">
				<!-- <li></li> -->
				<!-- <li></li> -->
				<li class="active"><a href="main.html"><i class="fas fa-home"></i>Home</a>

				</li>
				<li><a href="#"><a href="#"><i class="fas fa-phone-alt"></i>Contact</a></li>
				<li><a href="login.html"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>
			</ul>
		</div>
		
		</div> 
<!-- <section></section>

	</div>

-->

	<div id="menu"> 
		

			<ul>
				<li>

					<input type="checkbox" id="check">
	                <label for="check">
		            <!-- menu bar varaaan -->
		            <i class="fas fa-bars" id="btn"></i>
		            <!-- cancel bar varaaan -->
		            <i class="fas fa-times" id="cancel"></i>
		             <!-- <button class="open-button" onclick="openForm()"><img src="s.jpg"></button> -->
		            <div class="search">
                   	<form method="post" action="search.php" class="search-bar">
                   <input type="text" placeholder="Search docs,tags,..." value="" name="search">
		            <!-- <button onclick="open()">ok</button> -->
                 <button name="submit" onclick="openForm()" value=""><img src="s.jpg">
                   		</button>

                   	</form>
                   	</div>
                   	
	                </label>
                    <!-- <a href="#"><i class="fas fa-bars"></i></a> -->
                    <div class="sidebar">
	                <header>My Page</header>
	                <ul>
							<!-- add employee name -->
							<!-- <li></li> -->
							<!-- add search option -->
							<!-- <li></li> -->
							<li>
							
							<a href="dispatch.html">Dispatch</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>
						<li>
							
							<a href="inbox.html">Inbox</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>

						<li>
							
							<a href="scholarship.html">Scholarship</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>

						<li>
							
							<a href="report.php">Report</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>

						<li>
							
							<a href="addemp.html">Add Employee</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>
						<li>
							
							<a href="bonafide.html">Bonafide</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>


						
						</ul>	
                   </div>
                   </li>
                   <!-- <li>

                   </li> -->
               </ul>

		<br class="clearfix" />
	

</div>



<div id="page">
		<br>
	<!-- A button to open the popup form -->




<div class="form-popup" id="myForm">
  <form class="form-container" >
 
<table border="1" cellspacing="0" cellpadding="6" >


<?php 
 $servername="localhost";
$username="root";
$password="codes22";
$dbname="edispatch";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (isset($_POST['submit'])) 
{
$search=$_POST['search'];
	
	$qry="select * from dispatch where subject like '%$search%'";
	
    $result=$conn->query($qry);
    if ($result->num_rows > 0) {
    echo"<tr><th>Serial No.</th><th>Sender</th><th>Receiver</th><th>Subject</th><th>Date</th><th>Time</th><th>Type</th></tr>";
    while ($row=$result-> fetch_assoc()) {
	
			echo "<tr><td>".$row["serialno"]."</td><td>".$row["sender"]."</td><td>".$row["receiver"]."</td><td>".$row["subject"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["type"]."</td></tr>";
			echo"<br/>";
		}
		}
		else{
			echo "No data found";
		}
	
	}

$conn->close();

  ?>
</table>
<br><br><br><br><br>
<center>
<button type="submit" class="btn" onclick="openbtn()" name="create">Create</button>
<button type="reset" class="btn cancel" onclick="closeForm()">Close</button>
 </center>


</form>

</div>
	<!-- <button onclick="page();">create form  </button> -->
		
	<div class="div1"></div>	
</div>  

<script>

function openForm() {
   
  document.getElementByClass("form-popup").style.display = "block";
}
 
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function date()
{
	document.getElementById("showdates").innerHTML=Date();

}
</script>



		<div id="sidebar">
			<div class="box">

			</div>
			<div class="box">
				<div class="date-list">

				</div>
			</div>
		</div>
		<br class="clearfix" />
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>





	<div id="page-bottom">
		<div id="page-bottom-content">



		</div>
		<div id="page-bottom-sidebar">

		</div>
		<br class="clearfix" />
	</div>


</div>
<div id="footer">
</div>
</div>
</body>
</html>