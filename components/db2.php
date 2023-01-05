<?php
$hostname     = "localhost"; // Enter Your Host Name
$username     = "root";      // Enter Your Table username
$password     = "";          // Enter Your Table Password
$databasename = "finalp"; // Enter Your database Name
// $hostname     = "localhost"; // Enter Your Host Name
// $username     = "u813606825_door2college";      // Enter Your Table username
// $password     = "Door2college@123";          // Enter Your Table Password
// $databasename = "u813606825_door2college"; // Enter Your database Name

$con = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

<?php
// session_start();
// $_SESSION['loggedin']=false;
?>