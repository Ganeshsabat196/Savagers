<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.jss">

<?php require 'header.php';?>
<?php require 'header2.php';?>
<?php require 'nav2.php';?>
<?php require 'db2.php';?>
<body class="body">
    
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row ">
        <div class="col-md-5 border-right">
        <?php
                    $user_id=$_SESSION['user_id'];
                    $sql=" SELECT * from userinfo where user_id='$user_id'";
                    $result=mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
           echo" <div class='d-flex flex-column align-items-center text-center p-3 py-5'><img class='rounded-circle mt-5' style=' max-width:50% ' width='15px' src='https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'><span class='font-weight-bold'>{$row['name']}"." "."{$row['surname']}</span><span class='text-black-50'>{$row['email']}</span><span> </span></div>";
                        }
                    }
                    ?>
        </div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <!-- <div class="row mt-2"> -->
                    <?php
                    $user_id=$_SESSION['user_id'];
                    $sql=" SELECT * from userinfo where user_id='$user_id'";
                    $result=mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo"<div class='col-md-6'><label class='labels'>User Id</label><span class='form-control'>{$row['user_id']}</span></div>
                            <div class='col-md-6'><label class='labels'>Name</label><span class='form-control'>{$row['name']} </span></div>
                            <div class='col-md-6'><label class='labels'>Surname</label><span class='form-control'> {$row['surname']}</span></div>
                            <div class='col-md-6'><label class='labels'>Email ID</label><span class='form-control'> {$row['email']}</span></div>";
                        }
                    }

                    ?>
                    
                    <!-- <div class="col-md-6"><label class="labels">Surname</label><span class="form-control"> sabat</span></div> -->
                    <!-- <div class="col-md-6"><label class="labels">Surname</label><span class="form-control"> sabat</span></div> -->
                <!-- </div> -->
                <!-- <div class="row mt-3"> -->
                    <!-- <div class="col-md-12"><label class="labels">Mobile Number</label><span class="form-control">Ganesh </span></div> -->
                    <!-- <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                    <!-- <div class="col-md-12"><label class="labels">Email ID</label><span class="form-control">Ganesh </span></div> -->
                <!-- </div> -->
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                </div> -->
                <div class="mt-5"><button class="btn btn-primary profile-button" type="button">Logout </button></div>
            </div>
        </div>
      
    </div>
</div>
</div>
</div>

</body>

<style>
 .body{
    background-color: gray;
    /* background-color:rgb(255,255,255); */
    height: fit-content;

 }
 .header-logo{
    width: 70px;
 }
</style>