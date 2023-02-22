<!-- cwpdmvudofglzhcv -->

<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'phpmailer/vendor/autoload.php';

$servername="localhost";
$username="root";
$password="codes22";
$dbname="edispatch";
// $con = mysqli_connect($servername,$username,$password,$dbname); 
$con=mysqli_connect($servername,$username,$password,$dbname);
$email = "";
$name = "";
$errors = array();
if(!$con)
{
	die("Connection Failed" . mysqli_connect_error());
}
if (isset($_POST['submit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['pwd'];
	
$qry="select username,password from logins where username='$username' and password='$password'";
$result=$con->query($qry);
	if (mysqli_num_rows($result)>0)
	{
		$_SESSION['user']=$username;
		header("location:main.html");


	}
	else
	{
		echo '<script>
	alert("Incorrect password or username");
window.location.href="logins.php";
</script>';

	}

	mysqli_close($con);
}
if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            // $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE logins SET code = '$code', password = '$cpassword' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }


    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM logins WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE logins SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: main.html');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }


    // if(isset($_POST['check-email'])){
    //     $email = mysqli_real_escape_string($con, $_POST['email']);
    //     $check_email = "SELECT * FROM logins WHERE email='$email'";
    //     $run_sql = mysqli_query($con, $check_email);
    //     if(mysqli_num_rows($run_sql) > 0){
    //         $code = rand(999999, 111111);
    //         $insert_code = "UPDATE logins SET code = $code WHERE email = '$email'";
    //         $run_query =  mysqli_query($con, $insert_code);
    //         if($run_query){
    //             $subject = "Password Reset Code";
    //             $message = "Your password reset code is $code";
    //             $sender = "From: edispatch123@gmail.com";
    //             if(mail($email, $subject, $message, $sender)){
    //                 $info = "We've sent a passwrod reset otp to your email - $email";
    //                 $_SESSION['info'] = $info;
    //                 $_SESSION['email'] = $email;
    //                 header('location: reset-code.php');
    //                 exit();
    //             }else{
    //                 $errors['otp-error'] = "Failed while sending code!";
    //             }
    //         }else{
    //             $errors['db-error'] = "Something went wrong!";
    //         }
    //     }else{
    //         $errors['email'] = "This email address does not exist!";
    //     }
    // }





    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM logins WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        
try {
    if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111); 
            $insert_code = "UPDATE logins SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
//use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);

//Create an instance; passing `true` enables exceptions

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'edispath123@gmail.com';                     //SMTP username
    $mail->Password   = 'cwpdmvudofglzhcv';                               //SMTP password
              
    $mail->Port       = 587; 

    $mail->setFrom('edispath123@gmail.com', 'edispatch');
    $mail->addAddress($email); 
     $mail->isHTML(true);  

                $mail->Subject ="Password Reset Code  " ;
                $message = "Your password reset code is :---".$code.".";
                $sender = "From: edispatch123@gmail.com";  
                $mail->Body    = "Your password reset code is :".$code.".";                          
                     // $mail->send();
         if($mail->send()){
           
         $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }
                else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            
            } else{
                $errors['db-error'] = "Something went wrong!";
            }
        }
    
        else{
            $errors['email'] = "This email address does not exist!";
         }
        
    

}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM logins WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

if(isset($_POST['login-now'])){
        header('Location: logins.php');
    }

?>





