<?php

require 'components/db2.php';

if(isset($_GET['email']) && isset($_GET['token']))
{
    $token=$_GET['token'];
    $email=$_GET['email'];
    $q= "SELECT * FROM userinfo WHERE email='$email' And token='$token'";
    $result=mysqli_query($con,$q);
    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['status']==0){
                $update="UPDATE  `userinfo` SET `status`='1' WHERE `email`='$email'";
                if(mysqli_query($con,$update)){
                    echo"
                        <script>
                        alert('Email Verified');
                        window.location.href='/index.php';
                        </script>
                        ";
                }
            }
        }
        else{
            echo"
        <script>
        alert('Email already registered');
        window.location.href='finalp/index.php';
        </script>
        ";
        }
    }
    else{
        echo"
        <script>
        alert('cannot run query');
        window.location.href='finalp/index.php';
        </script>
        ";
    }
}
?>