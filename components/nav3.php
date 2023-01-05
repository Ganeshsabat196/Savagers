<?php include 'header.php' ?> 

<!-- preheader start  -->
<?php

session_start();
if(isset($_SESSION['loggedin'])){
  $loggedin=true;  
}
else{
  $loggedin=false;  

}

echo '
<div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>ganeshsabat@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>mumbai,India</a></li>www
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>




  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a href="/finalp" aria-current="page"
            class="brand w-nav-brand w--current">
            <div id="row1">
            <img
                src="img/logo2.png"
                alt="error" class="header-logo" /><h3 id="brand-name">Savagers</h3></div> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul role="list" class="header-navigation ms-auto">
                    <li class="nav-item-wrapper"><a href="/finalp" aria-current="page" class="nav-link w--current">Home</a>
                    </li>
                    <li class="nav-item-wrapper"><a href="/finalp/components/search.php" class="nav-link">Components</a></li>
                    <li class="nav-item-wrapper"><a href="/finalp/components/updates.php" class="nav-link">Updates</a></li>
                    <li class="nav-item-wrapper"><a href="/finalp/components/codesnippets.php" class="nav-link">Code-snippets</a></li>

                    <li class="nav-item-wrapper"><a href="#" class="nav-link">About</a></li>
';


echo '

                    <div class="dropdown">
';


if($loggedin){
echo'
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="img/icon/user.png" alt="" style="max-width: 35px;" width="10px">
  </button>';

}
  echo'
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  <li><a class="dropdown-item" href="/finalp/components/profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="/finalp/components/addcomp.php">Add Components</a></li>
                    <li><a class="dropdown-item" href="/finalp/components/addsnp.php">Add code-Snippets</a></li>
                    <li><a class="dropdown-item" href="/finalp/components/usercomp.php">Your Components</a></li>
                    <li><a class="dropdown-item" href="/finalp/components/usersnp.php">Your code-Snippets</a></li>
                    <li><a class="dropdown-item" href="#"><img src="img/icon/heart.png" alt="" style="max-width: 15%;" width="10px"> Favourites</a></li>
                </ul>

                ';
                if(!$loggedin){
                echo'
                <a href="/finalp/signup.php" class="button-primary header-button w-button">Login/Register</a>
                ';
                }
                if($loggedin){
                echo'
                <a href="/finalp/logout.php" class="button-primary header-button w-button">Logout</a>
                ';
                }
                echo'
                <a href="#" class="mx-4">v5.1</a>
            </ul>

                    
    </div>
';

echo'

  </div>
</nav>



';


?>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>