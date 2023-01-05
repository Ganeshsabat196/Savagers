<?php
 require '../db.php';
 $user_id=$_SESSION['user_id'];
 $sql=" SELECT * from usercomp where user_id='$user_id' and type='alert'";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0){
    // echo "<div class='mt-3 mb-3'>";
       while($row = mysqli_fetch_assoc($result)){
        echo "<div class='mt-3'>{$row['code']}</div>";  
              
    }
     
    
$sql=" SELECT * from usercomp where user_id='$user_id' and type='alert'";
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
  
    Echo' 
    <div id="test"></div> 
    <div class="alert alert-info" role="alert">
    Nothing to show! Add your components to see your collection!
  </div> ';
  // echo'<script>
  // str="<span>Ganesh</span>";
  
  // const encodeHTML1 = str=> str.replace(/[\u00A0-\u9999<>\&]/gim,(i)=> `&#${i.charCodeAt(0)};`);
  // let result = encodeHTML1(str);
  // document.getElementById("test").append(str);
  // </script>';
}

?>

<style>
  #overfy{
    overflow:auto;
  }
</style>