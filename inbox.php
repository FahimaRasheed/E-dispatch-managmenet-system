<!DOCTYPE html >
<html>
<head>
<title>Inbox</title>
<link rel="stylesheet" type="text/css" href="main.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

<style>
  /*table {
    width: 30px;
    color: grey;
    margin-left: 100px;

  }*/
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
.open-bt{
  cursor: pointer;
  
}

/* The popup form - hidden by default */
.form-popup {
  display: block;

  position: center;
  bottom: 0;
  right: 5px;
  /*border: 3px solid #f1f1f1;*/
  z-index: 1;
}
.popup {
  display: block;

  position: relative;
  bottom: 0;
  right: 5px;
  /*border: 3px solid #f1f1f1;*/
  z-index: 1;
  margin-left: 165px;

}

/* Add styles to the form container */
.form-container {
  max-width: 820px;
  padding: 30px;
  background-color: transparent;
  margin:0 5px 0 0;
}

/* Full-width input fields */
.form-container input[type=text], .form-container select, .form-container option {
  width: 450px;
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
.div0 .btn {
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
.cancel {

  background-color: #209D9D;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.div0 .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<script>
function toggleField(hideObj,showObj){ 
    hideObj.disabled=true; hideObj.style.display='none'; 
    showObj.disabled=false; 
    showObj.style.display='inline'; 
    showObj.focus(); 
  }
function openForm() {
   
  document.getElementById("myForm").style.display = "block";
//   var btn=document.getElementById("submit");
//   btn.addEventListner('click',function(){
// document.getElementById("tab").style.display = "block";
//   });
}
function edited()
  {
    // document.getElementById("myedit").style.display = "block";
    window.location.href="inbox2.php";

  }
function openF() {
   
  document.getElementById("myForms").style.display = "block";
}
 
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function closeF() {
  document.getElementById("myForms").style.display = "none";
}

function date()
{
  document.getElementById("showdates").innerHTML=Date();

}
</script>


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
        <li><a href="logins.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>
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
                 <!-- <button class="open-button" onclick="openF()">Open Form</button> -->
                <div class="search">
                    <form method="post" action="inbox2.php" class="search-bar">

                   <input type="text" placeholder="Search docs,tags,..." value="" name="search">
                <!-- <button onclick="open()">ok</button> -->
                 <button class="open-bt" type="submit" name="submit" id="submit"  value=""><img src="s.jpg">
                      </button>
                    </form>
                    </div>
                    
                  </label>
                    <!-- <a href="#"><i class="fas fa-bars"></i></a> -->
                    <div class="sidebar">
                  <header>Dept of CS</header>
                  <ul>
              <!-- add employee name -->
              <!-- <li></li> -->
              <!-- add search option -->
              <!-- <li></li> -->
              <li>
              
              <a href="viewprofile.php">View Profile</a>
              <!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
            </li>
              <li>
              
              <a href="dispatchtry1.php">Dispatch</a>
              <!-- <a class="hover" style="padding: 15px;" href="#"><i class="fas fa-cog"></i></a> -->
            </li>
            <li>
              
              <a href="inbox.php">Inbox</a>
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
              
              <a href="caution.php">Caution Deposit</a>
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
  <!-- <div class="div0" style="margin-left: 800px;"><button type="reset" class="btn cancel" onclick="edited()" style="background-color: #209D9D;border: 3px solid #ffffff;width: 70px;height: 50px;">Edit</button></div> -->
<div class="popup" id="myForms">
  <form method="post" action="dispatch.php" class="form-container" >
 <table>

<tr><td>
    <label for="from"><b>Sender</b></label></td><td>
    <!-- <input type="text" placeholder="Enter the sender" name="from" required> -->
    <select name="from" id="from" onchange="if(this.options[this.selectedIndex].value=='customOption'){ toggleField(this,this.nextSibling); this.selectedIndex='0'; }" required>
      <option>select</option>
      <option value="customOption">[type a custom value]</option>
      <option value="Vice-Chancellor’s Secretariat">Vice-Chancellor’s Secretariat</option>
      <option value="Director’s Secretariat, SEI&RR">Director’s Secretariat, SEI&RR</option>
      <option value="Director’s Secretariat, C&CR">Director’s Secretariat, C&CR</option>
      <option value="Examinations Wing">Examinations Wing</option>
      <option value="Ananda Rangapillai Library">Ananda Rangapillai Library</option>
      <option value="Office Of The Registrar">Office Of The Registrar</option>
      <option value="Establishment Section – Teaching">Establishment Section – Teaching</option>
      <option value="Establishment Section – Non-Teaching">Establishment Section – Non-Teaching</option>
      <option value="Academic Section">Academic Section</option>
      <option value="Purchase & Stores">Purchase & Stores</option>
      <option value="Planning & Development Section">Planning & Development Section</option>
      <option value="Transport Section">Transport Section</option>
      <option value="Recruitment Cell">Recruitment Cell</option>
      <option value="Special Reservation Cell">Special Reservation Cell</option>
      <option value="Legal Cell">Legal Cell</option>
      <option value="Public Grievance Cell">Public Grievance Cell</option>
      <option value="Public Relations Wing">Public Relations Wing</option>
      <option value="Vigilance & Security Wing">Vigilance & Security Wing</option>
      <option value="Engineering Wing">Engineering Wing</option>
      <option value="Horticulture Wing">Horticulture Wing</option>
      <option value="Electrical Wing">Electrical Wing</option>
      <option value="Guest House">Guest House</option>
      <option value="Dr. S. Sivasathya">Dr. S. Sivasathya (Professor)</option>
      
      <option value="Dr. R. Subramanian">Dr. R. Subramanian(Professor)</option>

<option value="Dr. T. Chithralekha">Dr. T. Chithralekha(Professor)</option>

<option value="Dr. S. K. V. Jayakumar">Dr. S. K. V. Jayakumar(Associate Professor)</option>

<option value="Dr. K. Suresh Joseph">Dr. K. Suresh Joseph(Associate Professor)</option>


<option value="Dr. S. Ravi">Dr. S. Ravi(Associate Professor)</option>

<option value="Dr. M. Nandhini">Dr. M. Nandhini(Associate Professor)</option>


<option value="R. P. Seenivasan">R. P. Seenivasan(Assistant Professor)</option>

<option value="Dr. K. Vijayanand">Dr. K. Vijayanand(Assistant Professor)</option>

<option value="Dr. T. Sivakumar">Dr. T. Sivakumar(Assistant Professor)</option>

<option value="Dr. R. Sunitha">Dr. R. Sunitha(Assistant Professor)</option>

<option value="Dr. Pothula Sujatha">Dr. Pothula Sujatha(Associate Professor)</option>

<option value="Dr. M. Sathya">Dr. M. Sathya(Assistant Professor)</option>

<option value="Dr. K. S. Kuppusamy">Dr. K. S. Kuppusamy(Associate Professor)</option>

<option value="Dr. V. Uma">Dr. V. Uma(Associate Professor)</option>

<option value="Dr. P. Shanthi Bala">Dr. P. Shanthi Bala(Associate Professor)</option>

<option value="Dr. T. Vengattaraman">Dr. T. Vengattaraman(Associate Professor)</option>

<option value="Dr. S. L. Jayalakshmi">Dr. S. L. Jayalakshmi(Assistant Professor)</option>

<option value="Dr. Krishnapriya">Dr. Krishnapriya(Assistant Professor)</option>

    </select><input name="sc" id="sc" style="display:none;width: 450px;
  height: 30px;
  padding: 5px;

  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">

</td>
</tr>
<tr><td>
    <label for="from"><b>Receipient</b></label></td><td>
    <!-- <input type="text" placeholder="Enter the sender" name="from" required> -->
    <select name="from" id="from" onchange="if(this.options[this.selectedIndex].value=='customOption'){ toggleField(this,this.nextSibling); this.selectedIndex='0'; }" required>
      <option>select</option>
      <option value="customOption">[type a custom value]</option>
      <option value="Vice-Chancellor’s Secretariat">Vice-Chancellor’s Secretariat</option>
      <option value="Director’s Secretariat, SEI&RR">Director’s Secretariat, SEI&RR</option>
      <option value="Director’s Secretariat, C&CR">Director’s Secretariat, C&CR</option>
      <option value="Examinations Wing">Examinations Wing</option>
      <option value="Ananda Rangapillai Library">Ananda Rangapillai Library</option>
      <option value="Office Of The Registrar">Office Of The Registrar</option>
      <option value="Establishment Section – Teaching">Establishment Section – Teaching</option>
      <option value="Establishment Section – Non-Teaching">Establishment Section – Non-Teaching</option>
      <option value="Academic Section">Academic Section</option>
      <option value="Purchase & Stores">Purchase & Stores</option>
      <option value="Planning & Development Section">Planning & Development Section</option>
      <option value="Transport Section">Transport Section</option>
      <option value="Recruitment Cell">Recruitment Cell</option>
      <option value="Special Reservation Cell">Special Reservation Cell</option>
      <option value="Legal Cell">Legal Cell</option>
      <option value="Public Grievance Cell">Public Grievance Cell</option>
      <option value="Public Relations Wing">Public Relations Wing</option>
      <option value="Vigilance & Security Wing">Vigilance & Security Wing</option>
      <option value="Engineering Wing">Engineering Wing</option>
      <option value="Horticulture Wing">Horticulture Wing</option>
      <option value="Electrical Wing">Electrical Wing</option>
      <option value="Guest House">Guest House</option>
      <option value="Dr. S. Sivasathya">Dr. S. Sivasathya (Professor)</option>
      
      <option value="Dr. R. Subramanian">Dr. R. Subramanian(Professor)</option>

<option value="Dr. T. Chithralekha">Dr. T. Chithralekha(Professor)</option>

<option value="Dr. S. K. V. Jayakumar">Dr. S. K. V. Jayakumar(Associate Professor)</option>

<option value="Dr. K. Suresh Joseph">Dr. K. Suresh Joseph(Associate Professor)</option>


<option value="Dr. S. Ravi">Dr. S. Ravi(Associate Professor)</option>

<option value="Dr. M. Nandhini">Dr. M. Nandhini(Associate Professor)</option>


<option value="R. P. Seenivasan">R. P. Seenivasan(Assistant Professor)</option>

<option value="Dr. K. Vijayanand">Dr. K. Vijayanand(Assistant Professor)</option>

<option value="Dr. T. Sivakumar">Dr. T. Sivakumar(Assistant Professor)</option>

<option value="Dr. R. Sunitha">Dr. R. Sunitha(Assistant Professor)</option>

<option value="Dr. Pothula Sujatha">Dr. Pothula Sujatha(Associate Professor)</option>

<option value="Dr. M. Sathya">Dr. M. Sathya(Assistant Professor)</option>

<option value="Dr. K. S. Kuppusamy">Dr. K. S. Kuppusamy(Associate Professor)</option>

<option value="Dr. V. Uma">Dr. V. Uma(Associate Professor)</option>

<option value="Dr. P. Shanthi Bala">Dr. P. Shanthi Bala(Associate Professor)</option>

<option value="Dr. T. Vengattaraman">Dr. T. Vengattaraman(Associate Professor)</option>

<option value="Dr. S. L. Jayalakshmi">Dr. S. L. Jayalakshmi(Assistant Professor)</option>

<option value="Dr. Krishnapriya">Dr. Krishnapriya(Assistant Professor)</option>

    </select><input name="sc" id="sc" style="display:none;width: 450px;
  height: 30px;
  padding: 5px;

  margin: 10px 20px 10px 5px;
  border: none;
  background: #f1f1f1;
  color: grey;" disabled="disabled" onblur="if(this.value==''){toggleField(this,this.previousSibling);}">

</td>
</tr>
    <!-- <tr><td><label for="fname"><b>File Name </b></label></td><td>
    <input type="text" placeholder="Enter the file name" name="fname" value="" required></td>
    </tr> -->
    <tr><td><label for="subject"><b>Subject </b></label></td><td>
    <input type="text" placeholder="Enter the Subject" name="subject" value=""><br></td>
    </tr>
    <tr></tr>
    <tr><center><td>
    
    <button type="submit" class="btn" onclick="openbtn()" name="receive">Create</button></center></td><td>
<!-- <button type="reset" class="btn cancel" onclick="closeF()">Close</button> -->
 </td></center></tr>
    </table>
  </form>
</div>
  <!-- <button onclick="page();">create form  </button> -->   
    
  <div class="div1"></div>  
</div>  




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