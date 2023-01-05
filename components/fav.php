<?php 
require 'db.php';
$sno=$_POST['data1'];
$id=$_POST['data2'];
echo $sno;
echo $id;


// INSERT INTO `userinfo` (`sno`, `user_id`, `password`, `token`, `status`, `tstamp`) VALUES ('1', 'Ganesh1122', 'Ganesh123', 'token', 'active', '2022-12-08 14:51:56.000');

$sql=" SELECT * from favourites where keyw='$sno' and user_id='$id'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $update="UPDATE `favourites` SET `active`='0' WHERE user_id='admin100' AND keyw='1';";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "removed from fav";
    }
}
else{
    echo $id;

    $sql=" INSERT INTO `favourites` (`key`, `user_id`,`active`) VALUES ('$sno', '$id','1');";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "added to fav";
    }
}




