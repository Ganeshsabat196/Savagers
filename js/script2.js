$(document).ready(function(){
  
    $("#Buttons").click(()=>{
        $.ajax({
            url:"usercat/buttons.php",
            type:"POST",
            // data: {data1:1},
            success: function(res){
                $(".card-body").html(res);
            }
        })
    })

    $("#alert").click(()=>{
        $.ajax({
            url:"usercat/Alerts.php",
            type:"POST",
            // data: {data1:1},
            success: function(res){
                $(".card-body").html(res);
            }
        })
    })

    $("#pagination").click(()=>{
        $.ajax({
            url:"category/pagination.php",
            type:"POST",
            // data: {data1:1},
            success: function(res){
                $(".card-body").html(res);
            }
        })
    })

    
})
