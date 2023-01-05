<?php
session_start();

if(isset($_SESSION['loggedin'])){
    echo "<script>alert('Do you want to logout');</script>";  
    echo"yes";
    session_destroy();
}
echo "<script>location.href = 'index.php';</script>";  
?>