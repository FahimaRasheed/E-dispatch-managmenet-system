<!DOCTYPE html >
<html>
<head>
<title>Certificate</title>
<link rel="stylesheet" type="text/css" href="sampl.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<style type="text/css">
  .pop{
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
  z-index: 1;
  }
  .form-popup {
  display: block;
  position: relative;
  bottom: 0;
  right: 5px;
  /*border: 3px solid grey;*/
  z-index: 9;
  margin-top: 0px;
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
  border: 2px solid grey;
  background-color: white;
}
.container{
    width: 150px;
  height: 150px;
  max-width: 820px;
  /*padding: 30px;*/
  background-color: white;
  margin:0 5px 0 0;
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
#yes{

}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #209D9D;
}

/* Add some hover effects to buttons */
.form-container .btn:hover/*, .open-button:hover*/ {
  opacity: 1;
}
/**/

.container input[type=text], .container select, .container option,.container textarea {
  width: 650px;
  height: 30px;
  padding: 5px;
  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;
}
.form-cont {
  width: 185px;
  height: 450px;
  max-width: 820px;
  /*padding: 30px;*/
  background-color: #DCDCDC;
  margin:0 5px 0 0;
}
.container input[type=text]:focus,input[type=date]:focus, .container select:focus, .container option:focus,.container textarea:focus {
  background-color: #ddd;
  outline: none;}
.container .btns {
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
.container .cancel {
  background-color: #209D9D;
}

/* Add some hover effects to buttons */
.container .btns:hover/*, .open-button:hover*/ {
  opacity: 1;
}

/**/
  .div1{
    background-color: white;
    color: white;
    width: 980px;
    height: 600px;
    margin-top: -319px;
    margin-left: -45px;
  }
  .bt1{
    width: 200px;
    height: 30px;
    background-color: #6E6E6E;
    border: 3px solid white;
  }
  .bt2{
    width: 200px;
    height: 30px;
    background-color: #6E6E6E;
    border: 3px solid white;
  }
  /*.divv{
    background-color: white;
    width: 160px;
    height: 500px;
    float: left;
    z-index: 1;
    margin-left: -100px;
  }*/
</style>
</head>
<body>
  <!-- <div class="first"></div> -->
  <!-- <div class="body"> -->
    
<div id="wrapper">
  
  <div id="header">
    <div id="logo">
    <ul style="margin-left: 0px;">
        <!-- <li></li> -->
        <!-- <li></li> -->
      <img src="Pondy_Univ_logo.png" style="width: 50px;height: 50px;;margin-top: 23px;margin-left: 35px;">
        <h2 style="margin-left: -43px;margin-top: 33px;margin-left: 30px;font-family: 'Roboto',sans-serif;">Pondicherry University</h2>
        <li></li>
        <li class="active" style="margin-top: 20px;margin-left: 80px;"><a href="main.html"><i class="fas fa-home"></i>Home</a>

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
    <!-- <div class="divv">hello</div> -->

      <ul>
        
        <li>

          <input type="checkbox" id="check" onclick="">
                  <label for="check">
                
                <i class="fas fa-bars" id="btn"></i>
              
                <i class="fas fa-times" id="cancel"></i>
                <!-- <div class="search">
                    <form action="" class="search-bar">
                      <input type="text" placeholder="Search docs,tags,..." name="search">
                      <button type="submit"><img src="s.jpg">
                      </button>
                    </form>
                    </div> -->
                  </label>
                    
                    <div class="sidebar">
                  <header>Dept of CS</header>
                  <ul>
              
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
  <!-- <div class="divv">hello</div> -->
  <!-- <input type="button" name="bt1" onclick="fun2()" class="bt1" value="Course Completion Certificate"><br/>
    <button type="button" name="bt2" onclick="fun1()"class="bt2">Bonafide Student Certificate</button><br> -->
    <!--  -->

  


 <div class="pop" id="myForms">
  <form method="post" action="certificate.php" class="container" >
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
    <label for="syear">Academic Year </label></td><td>
    <input type="month" placeholder="Starting year" name="syear" required>to<input type="month" placeholder="Ending year" name="eyear" required></td>
</tr>

    
    <tr></tr>
    <tr><td>
      <!-- onclick="opens()"  -->
<button class="btns" name="certificate">Create Document</button></td><td>
<button type="reset" class="btns cancel" onclick="closes()">Close</button></td></tr>

    </table>
    
  </form>

</div>


    

<!--  -->
    <div class="form-popup" id="myForm">
  <form method="post" action="bonafide.php" class="form-container" >
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
    <label for="syear">Academic Year </label></td><td>
    <input type="month" placeholder="Starting year" name="syear" required>to<input type="month" placeholder="Ending year" name="eyear" required></td>
</tr>
<tr>
  <td><label for="semester">Current Semester</label></td>
  <td><select name="year"><option>First Semester</option>
  <option>Second Semester</option>
<option>Third Semester</option>
<option>Fourth Semester</option>
<option>Fifth Semester</option>
<option>Sixth Semester</option>
</select></td>
</tr>
    <tr><td>
    <label for="purpose">Purpose</label></td><td>
    <select name="cat" id="cate" onchange="if(this.options[this.selectedIndex].value=='Option'){ toggleField(this,this.nextSibling); this.selectedIndex='0'; } else if(yesno(this)); ">
    <option></option>
      <option value="Option">[type a custom value]</option>
      <option>Internship</option>
      <option>Passport</option>
      <option>Address Proof</option>
      <option>Income Certificate</option>
      <option value="job">Job Purpose</option>
      <option>Scholarship/Education loan</option>

      </select><input name="cat" style="display:none;width: 650px;
  height: 30px;
  padding: 5px;
  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}"></td>
    </tr>
    <tr style="display: none;margin-left: 500px;" id="yes">
       <!-- id="yes" style="display: none;" -->
      <td><label for="cgpa">CGPA</label></td>
         <td><input type="text" name="cgpa" id="cgpa"/></td>
        
      
    </tr>
    <tr></tr>
    <tr><td>
<button type="submit" class="btn" onclick="openbtn()" name="scholarship">Create Document</button></td><td>
<button type="reset" class="btn cancel" onclick="closeForm()">Close</button></td></tr>

    </table>
    
  </form>

</div>

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
  
  function toggleField(hideObj,showObj){ 
    hideObj.disabled=true; hideObj.style.display='none'; 
    showObj.disabled=false; 
    showObj.style.display='inline'; 
    showObj.focus(); 
  }
  function openForm() {

  document.getElementById("myForm").style.display = "block";
}
 
function closeForm() {
  window.location.href="certificate.html";
}

function yesno(that){
  if(that.value=='job'){
    document.getElementById('yes').style.display="block";
  }else{
    document.getElementById('yes').style.display="none";
  }
}
function fun2()
  {
    document.getElementById("myForms").style.display = "block";
  }

function closes() {
  document.getElementById("myForms").style.display = "none";
}

</script>

</body>
</html>
