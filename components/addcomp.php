<?php require 'header.php';?>
<?php require 'nav2.php';?>
<?php require 'header2.php';?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
 
   <body class="sub_page">
     <div id="thisone">

     </div>
      <!-- why section -->
      <section class="why_section layout_padding" style="border:1px solid black; background-color:#eee">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="index.html">
                        <fieldset>
                             <label for="">Select type: </label>
                            
                            <div class="form-group">
                                <select id="opt1"  class="form-control">
                                    <option selected >Type</option>
                                    <option>Buttons</option>
                                    <option>alert</option>
                                    <option>Pagination</option>
                                </select>
                            </div>
                            <label for="">Code: </label>
                            <textarea placeholder="Enter your Code" rows="10" id="opt2" required></textarea>
                            <div class="col-md-2 text-center m-auto">
            	           <button id="srchbtn" type="button"  class="btn btn-primary btn-block">Submit</button>
            	        </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

      <script>
    $("#srchbtn").click(()=>{
        let opt1 =document.getElementById('opt1');
        let opt2 =document.getElementById('opt2');
      //   console.log(opt1.value);
      //   console.log(opt2.value);
        str=opt2.value;
      //   console.log(str);
        const encodeHTML = str=> str.replace(/[\u00A0-\u9999<>\&]/gim,(i)=> `&#${i.charCodeAt(0)};`);
        let endata = encodeHTML(str);
      //   console.log(endata);
        
        $.ajax({
            url:"userdet.php",
            type:"POST",
            data: {"data1":opt1.value, "data2":opt2.value,"data3":endata},
            success: function(res){
                $("#thisone").html(res);
            }
        })
    })
</script>
     
   </body>
</html>