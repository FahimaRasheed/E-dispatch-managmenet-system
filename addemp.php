<!DOCTYPE html >
<html>
<head>
<title>Add Employee</title>
<link rel="stylesheet" type="text/css" href="main.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<style>
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
  position: center;
  bottom: 0;
  right: 5px;
  border: 1px solid #f1f1f1;
  z-index: 1;
}

/* Add styles to the form container */
.form-container {
  max-width: 820px;
  padding: 30px;
  background-color: white;
  margin:0 5px 0 0;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 650px;
  padding: 20px;
  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
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
		<ul style="margin-left: 0px;">
				<!-- <li></li> -->
				<!-- <li></li> -->
			<img src="Pondy_Univ_logo.png" style="width: 50px;height: 50px;;margin-top: 23px;margin-left: 35px;">
				<h2 style="margin-left: -43px;margin-top: 33px;margin-left: 30px;">Pondicherry University</h2>
				<li></li>
				<li class="active"><a href="main.html"><i class="fas fa-home"></i>Home</a>

				</li>
				
				<!-- <li><a href="#"><a href="#"><i class="fas fa-phone-alt"></i>Contact</a></li> -->
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
		            <!-- <button class="open-button" onclick="openForm()">Open Form</button> -->
		            <div class="search">
                   	<form method="post" action="dispatch.php" class="search-bar">
                   		<input type="text" placeholder="Search docs,tags,..." name="search">
                   		<button type="submit" name="ok"><img src="s.jpg">
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
							
							<a href="dispatchtry1.php">Dispatch</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>
						<li>
							
							<a href="inbox.html">Inbox</a>
							<!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
						</li>

						<li>
							
							<a href="sam.php">Scholarship</a>
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
            <a href="certificate.html">Certificates</a>
              <!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
            </li>
            <li>
              
              <a href="caution.php">caution Deposit</a>
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
  <form action="dispatch.php" method="post" class="form-container">
 <table>

<tr><td>
    <label for="name"><b>Name</b></label></td><td>
    <input type="text" placeholder="Enter the name" name="name" value="" ></td>
</tr>
<tr><td>
    <label for="Incharge"><b>Incharge of </b></label></td><td>
    <input type="text" placeholder="incharge of" name="incharge" required><br></td>
    </tr>
    <tr><td><label for="email"><b>Email</b></label></td><td>
    <input type="text" placeholder="Enter the email" name="email" required></td>
    </tr>
    <tr><td><label for="phn"><b>Phone Number</b></label></td><td>
    <input type="text" placeholder="Enter the phone number" name="phn" required></td>
    </tr>
    <tr><td><label for="usname"><b>User ID </b></label></td><td>
    <input type="text" placeholder="Enter the Username" name="usname" required><br></td>
    </tr>
    <tr><td><label for="pwd"><b>Password</b></label></td><td>
    <input type="password" placeholder="Enter the Password" name="pwd"  required></td>
</tr>
<tr><td><label for="cpwd"><b>Confirm Password</b></label></td><td>
    <input type="password" placeholder="Enter the Password" name="cpwd"  required></td>
</tr>
<tr><td><label for="upload"><b>Upload the Photo</b></label></td><td>
    <input type="file" name="upload"></td>
</tr>
    
    <tr><center><td>
    
    <button type="submit" class="btn" name="submit">Submit</button></center></td><td>
<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
 </td></center></tr>
    </table>
 </form>
</div>
</div>
	<!-- <button onclick="page();">create form  </button> -->
		
	<div class="div1"></div>	
</div>  

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  window.location.href="main.html";
}

function date()
{
	document.getElementById('showdates').innerHTML=Date();

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
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br>

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