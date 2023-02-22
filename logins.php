<?php require_once "login.php"; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <style>
.btn{ padding: 9px 14px; font-size: 15px; line-height: normal; border-radius: 5px;background-color: blue }
.btn, .btn:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; width: 100%; }

.btn { background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x;  border: 1px solid #3762bc; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #E0DCDC;
	/*background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);*/
	/*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );*/
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: black; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	/*background: rgba(0,0,0,0.3);*/
	background: #ADD8E6;
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: black;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

    </style>
<script type="text/javascript">
	function openbtn(){
		if()
		 alert("Succesfully");

}
</script>
</head>

<body>
  <div class="login" action="login.php">
	<h1>Login</h1>
    <form method="post" action="login.php">
    	<input type="text" name="username" placeholder="Username" required="required" />
    	<!-- <?php 
    	// session_start();
    	// $_SESSION['user']=$_POST['username'];
    	?> -->
        <input type="password" name="pwd" placeholder="Password" required="required" />
        <div class="link forget-pass text-left"><a href="forgot-password.php" style="color: #000080;font-size: 13px;"><b>Forgot password?</b></a></div>
        <br>

        <button type="submit" class="btn" name="submit">Let me in.</button><br>
         
        <div class="link forget-pass text-left" style="margin-top: 4px;color: grey;">Not yet a member?<a href="addemp.html" style="color: lightblue;font-size: 13px;">Signup now</a></div>

        <!--  btn-primary btn-block btn-large -->
    </form>

</div>
  
    <!-- <script  src="js/index.js"></script> -->

</body>
</html>
