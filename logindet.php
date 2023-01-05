<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php 
require './components/db.php';
$user=$_POST['data1'];
$pass=$_POST['data2'];

// INSERT INTO `userinfo` (`sno`, `user_id`, `password`, `token`, `status`, `tstamp`) VALUES ('1', 'Ganesh1122', 'Ganesh123', 'token', 'active', '2022-12-08 14:51:56.000');

$sql=" SELECT * from userinfo where user_id='$user' and password='$pass' and status='1'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
       echo "<div class='text-success'>Loggedin succesfull!<div>";  
    //    $_SESSION['user_id']=$user;
       $_SESSION['loggedin']=true;
       $_SESSION['user_id']=$user;
       echo "<script>location.href = 'index.php';</script>";  
    
             
   }
   }else{
    echo"<div class='text-danger text-center'>User name not found! Signup first!<div>";
   }


