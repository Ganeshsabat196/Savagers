<?php
 require '../db.php';
 $sql=" SELECT * from pagination";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0){
    echo "<div class='mx-5 '>";
       while($row = mysqli_fetch_assoc($result)){
        echo "<div class='mx-3 mt-3'>{$row['code']}</div>";  
    }
    $sql=" SELECT * from pagination";
$result=mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
  echo "
<div id ='cpysec'>
<button id='cpybtn' class='text-dark text-center'>Copy</button>
<pre>
";
echo( "
</pre>
{$row['plaincode']}
</div>
"
);
        
}
     
  
}


else {
    Echo" not working ";
}

?>

<style>
  #overfy{
    overflow:auto;
  }
</style>