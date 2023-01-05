<?php require '../db.php';



$sql=" SELECT * from saa";

   $result=mysqli_query($con,$sql);
   if(mysqli_num_rows($result)>0){
    echo "<div class='mt-3 text-center'>";
       while($row = mysqli_fetch_assoc($result)){
        echo "<span id='btncat'>{$row['code']}</span>";        
    }
    
    echo "</div>
    <div id ='cpysec'>
    <button id='cpybtn' class='text-dark text-center'>Copy</button>
    <pre>
    ";

    $sql=" SELECT * from saa";
    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($result)){
        echo "<p id='textpg' class='text-white'>{$row['plaincode']}</p>";        
    }

    echo"
</div>
</pre>
    ";
}
else {
    Echo" not working ";
}
?>

