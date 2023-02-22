<!DOCTYPE html> 

<html lang="en"> 

  

<head> 

  

    <!-- html2pdf CDN--> 

    <script src= 

"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"> 

    </script> 

  

    <style> 

        .container { 

            position: fixed; 

            top: 20%; 

            left: 28%; 

            margin-top: -65px; 

            margin-left: -180px; 

            border-radius: 7px; 

        } 

  

        .card { 

            box-sizing: content-box; 

            width: 700px; 

            height: 150px; 

            padding: 30px; 

            border: 1px solid black; 

            font-style: sans-serif; 

            background-color: #f0f0f0; 
/*margin-left: 30px;*/

        } 

  

        #button { 

            background-color: #4caf50; 

            border-radius: 5px; 

            margin-left: 1500px; 

            margin-bottom: 5px; 

            color: white; 

        } 

  

        *{
    font-size: 10;
    font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  }
  img{
    margin-top: 1px;
  }

    #h1{
      margin-left: 65px;
      margin-top: -15px;
    }
    #h2{
      margin-left: 65px;
      margin-top: -10px;
    }
    .div{
      margin-left: 60px;

    }
    .div0{
      width: 20%;
      margin-left: -10px;
      margin-top: -5px;
    }
    .div1{
      /*float: 0 auto;*/
      width: 53.3%;
      margin: 0 auto;
      margin-top: -200px;
      height: 30px;
      margin-left: 310px;
    }
    #h3{
      margin-left: -55px;
      margin-top: -10px;
    }
    #h4{
      margin-left: -45px;
      margin-top: -5px;
    }
    .div2{
       margin-left: 450px;
       margin-top: 110px;
    }
    .div3{
      background-color: grey;
      height: 1px;
      width: 900px;
      margin-left: 100px;
    }
    .div4{
      margin-left: 640px;
      margin-top:6px;
    }
    .div5{
      margin-top: 60px;
      margin-left: -500px;
  }
    .div6{
      margin-top: 50px;

      }
    
    .div7{
      margin-left: 500px;
    }
    </style> 

</head> 

  

<body> 

    <div class="container"> 
<center>
        <button id="button">Generate PDF</button> 
</center>
        <div class="card" id="makepdf"> 
	  <div class="div">
  <div class="div0">
  <img src="logo.png" style="width: 150px;height: 150px;margin-left: 50px; margin-top: -3px;">
  <h3 id="h1"><b>Dr.S Siva Sathya</b></h3>
  <h4 id="h2">Professor & Head</h4>
</div>
<div class="div1">
  <h2 id="h3"><b>PONDICHERRY UNIVERSITY</b></h2>
  <h3 style="margin-left: -65px;margin-top: -5px;"><b>DEPARTMENT OF COMPUTER SCIENCE</b></h3>
  <h5 id="h4">(SCHOOL OF ENGINEERING & TECHNOLOGY)</h5>
</div>
<div class="div2">
  <h5>R.V Nagar,Kalapet,Puducherry - 605014<br>Phone:0413-2654978 (D) 0413-2654875 (O)<br>Mobile:91-9487566093.<br><u>E-Mail : ssivasathya@gmail.com</u></h5>
</div>
</div>
<div class="div3"></div>
<div class="div4"><b>Date :<?php echo date("d/m/y");?></b></div>
<div class="div5">
  <h2><center><u>COURSE COMPLETION CERTIFICATE</u></center></h2>
</div>
<div class="div6">
  
  <?php
if (isset($_POST['certificate'])) 
{
  $course=$_POST['course'];
  $reg=$_POST['reg'];
  $name=$_POST['name'];
  $syear=$_POST['syear'];
  $eyear=$_POST['eyear'];
  
echo "<h3>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbspThis is to certify that Mr/Ms. ".$name."(Reg. No:".$reg.") was <br> a student of ".$course." .Department of Computer Science of <br> this University in the academic year ".$syear." - ".$eyear." . He/She has completed <br> all his/her course works and project work .</h3>";

}
?>


</div>
<div class="div7">
  <h4><b>Head of the Department</b></h4>
</div>

            

        </div> 

    </div> 

  

    <script> 

        var button = document.getElementById("button"); 

        var makepdf = document.getElementById("makepdf"); 

  

        button.addEventListener("click", function () { 

            html2pdf().from(makepdf).save(); 

        }); 

    </script> 

</body> 

  

</html>