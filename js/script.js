$(document).ready(function(){
    $("#intro").click(()=>{
        $.ajax({
            url:"category/intro.php",
            type:"POST",
            // data: {data1:1},
            success: function(res){
                $(".card-body").html(res);
            }
        })
    })
    $("#btnpg").click(()=>{
        $.ajax({
            url:"category/buttons.php",
            type:"POST",
            // data: {data1:1},
            success: function(res){
                $(".card-body").html(res);
            }
        })
    })

    $("#Alerts").click(()=>{
        $.ajax({
            url:"category/Alerts.php",
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