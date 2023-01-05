<?php require 'header.php';?>
<?php require 'nav2.php';?>
<?php require 'filterbox.php';?>
<?php require 'header2.php';?>
<script src="../js/jquery-3.6.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sasta-github</title>
    <!-- <style>
        .tags{
            border:2px solid black;
        }
    </style> -->
</head>
<body>
<?php
 require 'db2.php';
 if(isset($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
 }

 $sql=" SELECT * from snippets";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0){
    echo"<div id='thisone'>";
       while($row = mysqli_fetch_assoc($result)){
        echo "
        <div class='container' >
        <div class='card'>
            <div class='card-header'>
                Featured
            </div>
      <div class='card-body'>
      <div>
      <button class='btn' style='float:right' ><img src='../img/icon/heart.png' alt='err' style='margin:2px; max-width: 15%;' width='10px'>Favorites</button>
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
    echo"</div>";
}
else {
    Echo" not working ";
}

?>

<script>
    $("#srchbtn").click(()=>{
        let opt1 =document.getElementById('opt1');
        let opt2 =document.getElementById('opt2');
        let opt3 =document.getElementById('opt3');
        let opt4 =document.getElementById('opt4');
        console.log(opt1.value);
        $.ajax({
            url:"getopt.php",
            type:"POST",
            data: {"data1":opt1.value, "data2":opt2.value,"data3":opt3.value,"data4":opt4.value},
            success: function(res){
                $("#thisone").html(res);
            }
        })
    })

function pass(sno,user_id){
    console.log("hell");
    $.ajax({
            url:"fav.php",
            type:"POST",
            data: {"data1":sno, "data2":user_id},
            success: function(res){
                $("#head").html(res);
            }
        })
}
      
</script>
</body>
</html>