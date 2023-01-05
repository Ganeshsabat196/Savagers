<?php require 'header.php';?>
<?php  require 'nav2.php';?>
<?php require 'header2.php';?>
<?php require 'db2.php';?>

<style>
    .row1 {
        display: flex;
        flex-direction: row;
        margin: 0;
    }
</style>
<header>

    <!-- Shop Section Begin -->

    <div class="row1 m-0">
        <div class="col-md-2">


            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                <div class="position-sticky">
                    <div class="list-group list-group-flush mx-3 mt-0">

                    <?php
                                                            
                    $sql=" SELECT  DISTINCT(type) FROM usercomp";
                    $result=mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){
                        
                        while($row = mysqli_fetch_assoc($result)){
                                echo "<a href='#' id='{$row['type']}' class='list-group-item list-group-item-action py-2 ripple' aria-current='true'>
                                <i class='fas fa-tachometer-alt fa-fw me-3'></i><span>{$row['type']}</span>
                            </a>";
                        }

                    }
                    ?>





                    </div>
                </div>
            </nav>

        </div>

        <div class="col-lg-10 col-md-10 col-sm-10">

            <div id="nav1"></div>
            <div class="card1" style="width: 100%; height:80vh">
                <div class="card-body">
                    <h3 class="mx-3">Your components</h3>

                    <p class="card-text mx-3 mb-4">Select the option to see your components. </p>

                </div>
            </div>
        </div>

    </div>

    <!-- Shop Section End -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
    <script src="../js/script2.js"></script>
    </body>

    <style>
        .card1 {
            background-color: #eeeeee;
            border-radius: 20px;
        }
    </style>

    </html>