<!DOCTYPE html >
<html>
<head>
<title>Scholarship</title>
<link rel="stylesheet" type="text/css" href="sampl.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

      <!-- jQuery library -->

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<style type="text/css">
  /*table {
    width: 30px;
    color: grey;
    margin-left: 100px;

  }*/
	.form-popup {
  display: block;
  position: relative;
  bottom: 0;
  right: 5px;
  /*border: 3px solid grey;*/
  z-index: 9;
  margin-top: 30px;
  margin-left: 80px;
  width: 150px;
  height: 150px;
  color: black;
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
.form-cont {
  width: 185px;
  height: 450px;
  max-width: 820px;
  /*padding: 30px;*/
  background-color: #DCDCDC;
  margin:0 5px 0 0;
}
.popup {
  display: none;
  position: relative;
  bottom: 0;
  right: 5px;
  /*border: 3px solid grey;*/
  z-index: 9;
  margin-top: 30px;
  margin-left: 80px;
  width: 150px;
  height: 150px;
  color: black;
}
table{
	border: 2px solid grey;
	background-color: white;
}
.form-container {
	width: 150px;
  height: 150px;
  max-width: 820px;
  /*padding: 30px;*/
  background-color: white;
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
    */margin-top: -380px;
    margin-left: -45px;
    z-index: 1;
	}
.bts1{
  width: 150px;
  height: 50px;
  margin-top: 6px;
  background-color:#D3D3D3; 
  border: 2px solid white;
  margin-left: -110px;
}
.bts2{
  width: 150px;
  height: 50px;
  /*margin-top: 60px;*/
  margin-left: -110px;
  background-color:#D3D3D3; 
  border: 2px solid white;


}
</style>
</head>
<body>
	<!-- <div class="first"></div>
	<div class="body"> -->
<div id="wrapper">
	
	<div id="header">
    <div id="logo">
    <ul style="margin-left: 0px;">
        <!-- <li></li> -->
        <!-- <li></li> -->
      <img src="Pondy_Univ_logo.png" style="width: 50px;height: 50px;;margin-top: 23px;margin-left: 35px;">
        <h2 style="margin-left: -43px;margin-top: 33px;margin-left: 30px;font-family: 'Roboto',sans-serif;">Pondicherry University</h2>
        <li></li>
        <li class="active" style="margin-top: 20px;"><a href="main.html"><i class="fas fa-home"></i>Home</a>

        </li>
        
        <!-- <li><a href="#"><a href="#"><i class="fas fa-phone-alt"></i>Contact</a></li> -->
        <li style="margin-top: 20px;"><a href="logins.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>
      </ul>
    </div>
    
    </div> 
		
		<!-- </div>  -->
    <div class="fpopup" id="Form">
  <form class="form-cont">
    
  </form>
</div>

	
	<div id="menu"> 
		

			<ul>
				<li>

					<input type="checkbox" id="check">
	                <label for="check">
		            
		            <i class="fas fa-bars" id="btn"></i>
		          
		            <i class="fas fa-times" id="cancel"></i>
		            <div class="search">
                   	<form method="post" action="schosearch.php" class="search-bar">
                   		<input type="text" placeholder="Search docs,tags,..." name="search">
                   		<button type="submit" name="submit" value=""><img src="s.jpg">
                   		</button>
                   	</form>
                   	</div>
	                </label>
                    
                    <div class="sidebar">
	                <header>Dept of CS</header>
	                <ul>
                    <li>
              
              <a href="viewprofile.php">View Profile</a>
              
            </li>
							
							<li>
							
							<a href="dispatchtry1.php">Dispatch</a>
							
						</li>
						<li>
							
							<a href="inbox.php">Inbox</a>
							
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
  <br>
  <br>
  <h5 style="color: black;margin-left: -430px;">Select the Scholarship form to be filled</h5><!-- <img style="width: 30px;height: 30px;margin-top: -10px;margin-left: -93px;" src="images.jpg"><br> --><br>
	<input type="button" name="bt1" onclick="fun2()" value="Academic Section Form" class="bts1"><br><br>
    <button type="button" class="bts2" name="bt2" onclick="fun1()">Finance Section Form</button>


<!-- <div class="form-popup" id="myForms">
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
 
  $qry="select * from scholarship where regno like '%$search%'";
  
    $result=$conn->query($qry);
    
    if ($result->num_rows > 0) {
    echo"<tr><th>Course</th><th>Register No.</th><th>Name</th><th>Address</th><th>Phone Number</th><th>Category</th><th>Scholarship Name</th></tr>";
    while ($row=$result-> fetch_assoc()) {
  
      echo "<tr><td>".$row["course"]."</td><td>".$row["regno"]."</td><td>".$row["name"]."</td><td>".$row["addr"]."</td><td>".$row["phone"]."</td><td>".$row["category"]."</td><td>".$row["sname"]."</td></tr>";
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

<button type="reset" class="btn cancel" onclick="closes()">Close</button>
 </center>


</form>

</div> -->

 <!--    <div class="popup" id="myForm">
  <form method="post" action="ser.php" class="form-container" >
 <table>
<tr><td>
    <label for="course">Course</label></td><td>
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
    <label for="addr">Address</label></td><td>
     <input type="text" placeholder="Enter the Address" name="addr" value="" required><br></td> -->
    <!-- <textarea id="addr" name="addr" rows="4" cols="87"></textarea><br></td>
    </tr>
    <tr><td>
    <label for="phn">Mobile Number</label></td><td>
    <input type="text" placeholder="Enter the Mobile No." name="phn" value="" required><br></td>
    </tr>
    <tr><td>
    <label for="category">Category</label></td><td> -->
    <!-- <input type="text" placeholder="Enter the category" name="category" value="" required><br></td> -->
    <!-- <select name="cat" id="cat" onchange="if(this.options[this.selectedIndex].value=='Option'){ toggleField(this,this.nextSibling); this.selectedIndex='0'; } ">
    <option></option>
    	<option value="Option">[type a custom value]</option>
      <?php 

                     $servername="localhost";
$username="root";
$password="codes22";
$dbname="edispatch";
$conn = mysqli_connect($servername,$username,$password,$dbname);

                     $query= "select * from category order by name ASC";

                     $result= mysqli_query($conn,$query);

                     while ($row= mysqli_fetch_array($result)) { ?>
                     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                      <?php } ?> -->
    	<!-- <option>SC/ST</option>
    	<option>OBC</option>
    	<option>Single Child Girls</option>
    	<option>General</option> -->
    	<!-- </select><input name="cat" style="display:none;width: 650px;
  height: 30px;
  padding: 5px;
  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}"></td>
    </tr>
<tr><td>
    <label for="sch">Scholarship Name</label></td><td> -->
     <!-- <input type="text" placeholder="Enter the scholarship name" name="sc" required></td> -->
    <!-- <select name="sc" id="sc" onchange="if(this.options[this.selectedIndex].value=='customOption'){ toggleField(this,this.nextSibling); this.selectedIndex='0'; }">
    	
    	<option></option>
    	<option value="customOption">[type a custom value]</option>
      <option value="">select</option>
      
    	
 
    </select><input name="sc" id="sc" style="display:none;width: 650px;
  height: 30px;
  padding: 5px;

  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">

     
</td>
    
</tr>

    
    <tr></tr>
    <tr><td>
<button type="submit" class="btn" onclick="openbtn()" name="scholarship">Submit</button></td><td>
<button type="reset" class="btn cancel" onclick="closeForm()">Close</button></td></tr>

    </table>
    
  </form>


</div>  -->

<!-- <div class="popup" id="myAcform">
  <form method="post" action="ser.php" class="form-container" >
 <table>
<tr><td>
    <label for="course">Course</label></td><td>
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
    <label for="addr">Address</label></td><td>
     <input type="text" placeholder="Enter the Address" name="addr" value="" required><br></td> -->
   <!--  <textarea id="addr" name="addr" rows="4" cols="87"></textarea><br></td>
    </tr>
    <tr><td>
    <label for="phn">Mobile Number</label></td><td>
    <input type="text" placeholder="Enter the Mobile No." name="phn" value="" required><br></td>
    </tr>
    <tr><td>
    <label for="category">Category</label></td><td> --> 
    <!-- <input type="text" placeholder="Enter the category" name="category" value="" required><br></td> -->
   <!--  <select name="cat" id="cat" onchange="if(this.options[this.selectedIndex].value=='Option'){ toggleField(this,this.nextSibling); this.selectedIndex='0'; } ">
    <option></option>
      <option value="Option">[type a custom value]</option>
      <?php 

                     $servername="localhost";
$username="root";
$password="codes22";
$dbname="edispatch";
$conn = mysqli_connect($servername,$username,$password,$dbname);

                     $query= "select * from category order by name ASC";

                     $result= mysqli_query($conn,$query);

                     while ($row= mysqli_fetch_array($result)) { ?>
                     <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                      <?php } ?>
       <option>SC/ST</option>
      <option>OBC</option>
      <option>Single Child Girls</option>
      <option>General</option> -->
      <!-- </select><input name="cat" style="display:none;width: 650px;
  height: 30px;
  padding: 5px;
  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}"></td>
    </tr>
<tr><td>
    <label for="sch">Scholarship Name</label></td><td> -->
     <!-- <input type="text" placeholder="Enter the scholarship name" name="sc" required></td> -->
    <!-- <select name="sc" id="sc" onchange="if(this.options[this.selectedIndex].value=='customOption'){ toggleField(this,this.nextSibling); this.selectedIndex='0'; }">
      
      <option></option>
      <option value="customOption">[type a custom value]</option>
      <option value="">select</option>
      
      
 
    </select><input name="sc" id="sc" style="display:none;width: 650px;
  height: 30px;
  padding: 5px;

  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">

     
</td>
    
</tr>

    
    <tr></tr>
    <tr><td>
<button type="submit" class="btn" onclick="openbtn()" name="scholarship">Submit</button></td><td>
<button type="reset" class="btn cancel" onclick="clo()">Close</button></td></tr>

    </table>
    
  </form>


</div> --> 

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
		 
     window.location.href="finance.php";

	}
  function fun2()
  {
     window.location.href="academic.php";

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
function opens() {
    // document.write("wesrdtrfgzesxdrctfvgbxrctfvgybhubunrxctfvgybhuxdrcf");
  document.getElementById("myForms").style.display = "block";
}
function closes() {
    
  document.getElementById("myForms").style.display = "none";
}
function clo() {
    
  document.getElementById("myAcform").style.display = "none";
}

 
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}



</script>




</body>
</html>
<script>

   $(document).ready(function(){

 

    $("#cat").change(function(){

      var cat_id = this.value;

      $.ajax({

      url: "scholarship.php",

      type: "POST",

      data: {

      cat_id: cat_id

      },

      cache: false,

      success: function(result){     

        $("#sc").html(result);

       
      }

      });    

    });   

    

   

   });

</script>