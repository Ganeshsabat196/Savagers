<!-- INSERT INTO `usersnp` (`sno`, `user_id`, `code`, `plaincode`, `language`, `type`, `title`, `descr`) VALUES ('1', 'admin', 'Hello', 'hello', 'HTML', 'FUNCTION', 'Box function', 'testing'); -->

<?php 
require 'db.php';
// {$row['type']}
$opt1=$_POST['data1'];
$opt2=$_POST['data2'];
$opt3=$_POST['data3'];
$opt4=$_POST['data4'];
$opt5=$_POST['data5'];
$endata=$_POST['data6'];
$user_id=$_SESSION['user_id'];
// echo $opt1;
// echo $opt2;
// echo $opt3;
// echo $opt4;
// echo $opt5;

if($opt1==='Type'){
    echo "select type";
    
}
if($opt2===''){
    // $opt2="";
    echo "Enter codee";
}


if($opt1!='Type' and $opt2!=''){

    // INSERT INTO `usercomp` (`sno`, `user_id`, `code`, `type`, `plaincode`) VALUES ('1', 'admin', 'hello', 'alert', 'alert');
    $sql="INSERT INTO `usersnp` (`user_id`, `code`, `plaincode`, `language`, `type`, `title`, `descr`) VALUES ( '$user_id', '$opt5', '$endata', '$opt1', '$opt2', '$opt3', '$opt4');";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"done";
        header("/finalp/category/addsnp.php");
    }else{
        echo "ERROR";
    }
}
// if($opt3==='All'){
//     $opt3="";
// }
// if($opt4==='Type'){
//     $opt4="";
// }
// $mopt1="%".$opt1."%";
// $mopt2="%".$opt2."%";
// $mopt3="%".$opt3."%";
// $mopt4="%".$opt4."%";

// // echo $mopt1. $mopt2 .$mopt3. $mopt4;

// $sql="SELECT * from snippets Where Languages LIKE '$mopt1' and tag LIKE '$mopt2' and statuses LIKE '$mopt3' and type LIKE '$mopt4'";
// $result=mysqli_query($con,$sql);
// Echo "<div class='container'>Results:".mysqli_num_rows($result)."</div>";
// if(mysqli_num_rows($result)>0){
//     while($row = mysqli_fetch_assoc($result)){
//     echo "
//     <div class='container'>
//     <div class='card'>
//         <div class='card-header'>
//             Featured
//         </div>
//     <div class='card-body'>
//     <div>
//     <button class='btn' style='float:right'><img src='../img/icon/heart.png' alt='err' style='margin:2px; max-width: 15%;' width='10px'>Favorites</button>
//     <button class='btn' style='float:right'><img src='../img/icon/copy.png' alt='err' style=' max-width: 15%;' width='10px'>Copy</button>
//     </div>
//     <h4 class='card-title'>{$row['Title']}</h4>
                                
//     <p class='card-text tags'>#description</p>
//     <div style='display:flex;' class='mt-4'>
//     <p class='card-text tags'>#Language : {$row['languages']}</p>
//     <p class='card-text tags'>#Tag : {$row['tag']}</p>
//     <p class='card-text tags'>#Status : {$row['statuses']}</p>
//     <p class='card-text tags'>#Type : {$row['type']}</p>
//     </div>
//     <a href='#' class='btn btn-primary'>View code</a>
//     </div>
    
    
//     </div>
//     </div>";    




//     }




// }


?>