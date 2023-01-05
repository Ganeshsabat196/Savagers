<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$token){

  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/SMTP.php';
   
  $mail = new PHPMailer(true);
  
  
  try {
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'ganeshsabat1457@gmail.com';                     //SMTP username
      $mail->Password   = 'wzuojyjfihmocakz';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('ganeshsabat1457@gmail.com', 'Ganesh Sabat');
  
      $mail->addAddress($email);     //Add a recipient
     
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Email verification from Ganesh sabat';
      $mail->Body    = "Thank you registering in our website.
      To verify your email click on the below link to activate your account
      <a href='http://localhost/finalp/verify.php?email=$email&token=$token'>Verify Your Email</a>";
  
      $mail->send();
      return true;
  } catch (Exception $e) {
      return false;
  }
}

?>


<?php 
require './components/db.php';
$data1=$_POST['data1'];
$data2=$_POST['data2'];
$data3=$_POST['data3'];
$data4=$_POST['data4'];
$data5=$_POST['data5'];
$data6=$_POST['data6'];

//

// if($data1=="" || $data2=="" || $data3==""  || $data4==""  || $data5==""  || $data6==""){
    // }

$sql=" SELECT * from userinfo where user_id='$data3'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    echo "<div class='text-danger text-center'>username exists!<div>";
}
else{
    $sql=" SELECT * from userinfo where email='$data6'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        echo "<div class='text-danger text-center'>Email already registered!<div>";
    }
    else{
        if($data4==$data5){
            $token=bin2hex(random_bytes(16));
            $sql=" INSERT INTO `userinfo` (`user_id`, `password`, `status`, `tstamp`, `name` , `surname` , `email`,`token`) VALUES ( '$data3', '$data4', '0', CURRENT_TIMESTAMP(),'$data1','$data2','$data6','$token');";
            $result=mysqli_query($con,$sql);
            
            if($result && sendMail($data6,$token)){
           
    
            echo "<div class='text-success'>Sign up complete! email sent verify your email to activate your account. <div>";  
            // echo "<script>location.href = 'index.php';</script>";       
       }else{
        echo"<div class='text-danger'>Failed to signup !Try again later!<div>";
       }
        }else{
            echo"<div class='text-danger text-center'>Password doesn't match!<div>";
        }
    }
   
}













