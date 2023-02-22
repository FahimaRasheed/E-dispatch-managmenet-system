<!DOCTYPE html>
<html>
<head>
	 
	<title> Certificate </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="This ">

	<meta name="author" content="Code With Mark">
	<meta name="authorUrl" content="http://codewithmark.com">

	<!--[CSS/JS Files - Start]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<style type="text/css">
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
      margin-left: -35px;
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
      margin-left: -300px;
  }
    .div6{
      margin-top: 50px;

      }
    
    .div7{
      margin-left: 500px;
    }
    .btn_print{
    	margin-left: 500px;
    }
  </style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 


	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 
  
 	
 	<style>
	
	</style>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>

 

	<script type="text/javascript">
	$(document).ready(function($) 
	{ 

		$(document).on('click', '.btn_print', function(event) 
		{
			event.preventDefault();

			//credit : https://ekoopmans.github.io/html2pdf.js
			
			var element = document.getElementById('container_content'); 

			//easy
			//html2pdf().from(element).save();

			//custom file name
			//html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


			//more custom settings
			var opt = 
			{
			  margin:       1,
			  filename:     'pageContent_'+js.AutoCode()+'.pdf',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'pt', format: [612,792], orientation: 'landscape', }
			};

			// New Promise-based usage:
			html2pdf().set(opt).from(element).save();

			 
		});

 
 
	});
	</script>

	 

</head>
<body>

<div class="text-center" style="padding:20px;">
	<input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>


<div class="container_content" id="container_content" >
		
   <div class="div">
  <div class="div0">
  <img src="logo.png" style="width: 150px;height: 150px;margin-left: 50px; margin-top: -3px;">
  <h4 id="h1"><b>Dr.S Siva Sathya</b></h4>
  <h5 id="h2">Professor & Head</h5>
</div>
<div class="div1">
  <h3 id="h3"><b>PONDICHERRY UNIVERSITY</b></h3>
  <h4 style="margin-left: -65px;margin-top: -5px;"><b>DEPARTMENT OF COMPUTER SCIENCE</b></h4>
  <h6 id="h4">(SCHOOL OF ENGINEERING & TECHNOLOGY)</h6>
</div>
<div class="div2">
  <h6>R.V Nagar,Kalapet,Puducherry - 605014<br>Phone:0413-2654978 (D) 0413-2654875 (O)<br>Mobile:91-9487566093.<br><u>E-Mail : ssivasathya@gmail.com</u></h6>
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




</body>
</html>