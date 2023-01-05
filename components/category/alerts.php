<?php
 require '../db.php';
 $sql=" SELECT * from alerts";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0){
    // echo "<div class='mt-3 mb-3'>";
       while($row = mysqli_fetch_assoc($result)){
        echo "<div class='mt-3'>{$row['code']}</div>";  
              
    }
     
    
$sql=" SELECT * from alerts";
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