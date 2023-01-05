
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sasta github</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/codetemplate.webflow.65e5c15ce.css">
  <script src="js/webflow.b8b7f3bfb.js"></script>
</head>
<body>
<?php include 'components/nav.php'?>


<!-- <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div> -->


<!-- section1  -->



<!-- section1  -->

<!-- container 1  -->

<section class="p-0" id="home">
  <img src="images/bgimg.png" id="bg" alt="error">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid" src="img/1.svg" width="350" alt="" /></div>
            <div class="col-md-7 col-lg-6  text-md-start"><span class="badge bg-light rounded-pill text-dark align-items-center d-flex flex-row-reverse justify-content-end mx-auto mx-md-0 ps-0 w-75 w-sm-50 w-md-75 w-xl-50 mt-3">#Devloping mode on!<img class="img-fluid float-start me-3" src="" alt=""/></span>
              <h1 class="mb-4 display-3 fw-bold lh-sm text-white">Let’s build from here <br class="d-block d-lg-none d-xl-block" />modern lifestyle.</h1>
              <p class="mt-3 mb-4 text-white">Harnessed for productivity. Celebrated for built-in security.<br class="d-none d-lg-block" /> Welcome to the platform developers love.</p><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Try for free</a><a class="btn btn-link ps-md-4" href="#" role="button"> Watch demo video</a>
            </div>
          </div>
        </div>
      </section>
      
      <!-- container 1 end  -->
      <?php
      //  include 'components/service2.php'
       ?>

<?php include 'components/testimonial.php'?>


      <h2 class="text-center mt-4">About Us</h2>
<div class="section2">
  <div id="section2a">
    <img src="img/2.jpg" id="abtimg" alt="">
    </div>
    
<div class="promo_content">
  <h2 class="promo_content-header" data-aos="fade-left">Learn and get a profession online</h2>
                        <p class="promo_content-text" data-aos="fade-up" data-aos-delay="50">
                            Morbi tempor eleifend condimentum. Etiam mollis urna et massa tempus vulputate. Nunc sed nisl est. Donec non
                            consectetur elit. Praesent accumsan elit urna, eget mattis turpis aliquam a. In sagittis bibendum consequat.
                            Quisque porta volutpat ligula sit amet varius
                        </p>
                        <a class="promo_content-btn btn btn--gradient" href="#" data-aos="fade-up" data-aos-delay="100">
                            <span class="text btn-secondary btn">Try for Free</span>
                          </a>
                        </div>
</div>


<!-- <section class="subscription bg-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="subscription-wrapper">
          <div class="d-flex subscription-content justify-content-between align-items-center ">
            <h3 class="flex-fill">Subscribe <br> to our newsletter</h3>
            <form action="" class="row flex-fill">
              <div class="col-lg-7 my-2">
                <input type="email" class="form-control px-4 border-0 w-100 text-center " id="email" placeholder="Your Email" name="email">
              </div>
              <div class="col-lg-5 mt-3">
                <button  id="button" class="btn btn-primary btn-lg border-0 w-100">Subscribe Now</button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->




<style>
  footer p{
    padding: 10px 0px;
  }
</style>


<?php include 'components/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="js/jquery-3.6.1.min.js"></script>

<script>
    $("#button").click(()=>{
        let opt1 =document.getElementById('email');
       
        console.log(opt1.value);

        // $.ajax({
        //     url:"usersnpdet.php",
        //     type:"POST",
        //     data: {"data1":opt1.value, "data2":opt2.value,"data3":opt3.value,"data4":opt4.value,"data5":opt5.value,"data6":endata},
        //     success: function(res){
        //         $("#thisone").html(res);
        //     }
        // })
    })
</script>


</body>
</html>