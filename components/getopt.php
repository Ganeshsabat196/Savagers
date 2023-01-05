<?php 
require 'db2.php';
// {$row['type']}
$opt1=$_POST['data1'];
$opt2=$_POST['data2'];
$opt3=$_POST['data3'];
$opt4=$_POST['data4'];


if($opt1==='Language'){
    $opt1="";
}
if($opt2==='Type'){
    $opt2="";
}
if($opt3==='All'){
    $opt3="";
}
if($opt4==='Type'){
    $opt4="";
}
$mopt1="%".$opt1."%";
$mopt2="%".$opt2."%";
$mopt3="%".$opt3."%";
$mopt4="%".$opt4."%";

// echo $mopt1. $mopt2 .$mopt3. $mopt4;

$sql="SELECT * from snippets Where Languages LIKE '$mopt1' and tag LIKE '$mopt2' and statuses LIKE '$mopt3' and type LIKE '$mopt4'";
$result=mysqli_query($con,$sql);
Echo "<div class='container'>Results:".mysqli_num_rows($result)."</div>";
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
    echo "
    <div class='container'>
    <div class='card'>
        <div class='card-header'>
            Featured
        </div>
    <div class='card-body'>
    <div>
    <button class='btn' style='float:right'><img src='../img/icon/heart.png' alt='err' style='margin:2px; max-width: 15%;' width='10px'>Favorites</button>
    <button class='btn' style='float:right'><img src='../img/icon/copy.png' alt='err' style=' max-width: 15%;' width='10px'>Copy</button>
    </div>
    <h4 class='card-title'>{$row['Title']}</h4>
                                
    <p class='card-text tags'>#description</p>
    <div style='display:flex;' class='mt-4'>
    <p class='card-text tags'>#Language : {$row['languages']}</p>
    <p class='card-text tags'>#Tag : {$row['tag']}</p>
    <p class='card-text tags'>#Status : {$row['statuses']}</p>
    <p class='card-text tags'>#Type : {$row['type']}</p>
    </div>
    <a href='#' class='btn btn-primary'>View code</a>
    </div>
    
    
    </div>
    </div>";    




    }




}


?>