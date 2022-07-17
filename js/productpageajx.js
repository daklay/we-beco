let button = document.getElementById("addtocartpagebtn").children[0];
$(".addtocartpagebtn button").click(()=>{
    let product_id = Number(button.value);
    let action = 'productpage';
    $.ajax({
        url : 'addtocartaction.php',
        method : 'POST',
        dataType : 'html',
        data :{
            product_id : product_id,
            action : action
        },success:function(data){
            $("#alert1").html(data);
            console.log(data);
        }
    })
})

