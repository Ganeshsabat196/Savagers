<?php require '../db.php';
$user_id=$_SESSION['user_id'];

$sql=" SELECT * from usercomp where user_id='$user_id' and type='Buttons'";

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

    $sql=" SELECT * from usercomp where user_id='admin' and type='Buttons'";
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
    Echo' <div class="alert alert-info" role="alert">
    Nothing to show! Add your components to see your collection!
  </div> ';
}
?>

