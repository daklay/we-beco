
function getQntyValues(){
    let qnty_arr = [];
    let elmclass = document.getElementsByClassName("displaycounter");
    for(let i=0; i<elmclass.length; i++){
        qnty_arr.push(elmclass[i].textContent);
    }
    return qnty_arr;
}
function getProductId(){
    let id_arr = [];
    let idByname = document.getElementsByName("cart_product_id");
    for(let i=0; i<idByname.length; i++){
        id_arr.push(idByname[i].getAttribute("value"));
    }
    return id_arr;
}
var product_deleted_id = [];
function dell_getId(e){
    e.parentElement.parentElement.parentElement.parentElement.remove() 
    product_deleted_id.push(Number(e.previousElementSibling.value))
    return product_deleted_id;
}
$(document).ready(()=>{

    $("form").click((e)=>{
        e.preventDefault();

        var action = 'data';
        var product_id = $(e.target).parent().attr("class");


        $.ajax({
            url: 'addtocartaction.php',
            method : 'POST',
            dataType: 'html',
            data: {
                action: action,
                product_id : product_id
            },
            success:function(data){
                $("#alert").html(data);
                console.log(data);
            }
        })

    })
    
    $("#btn_checkout").click(()=>{
        // e.preventDefault();
        var action = 'dataqnty';
        var product_qnty_arr = getQntyValues();
        var product_id = getProductId();
        var product_deleted_id_res = product_deleted_id;

        $.ajax({
            url: 'addtocartaction.php',
            method : 'POST',
            dataType : 'html',
            data :{
                action : action,
                product_qnty_arr : product_qnty_arr,
                product_id : product_id,
                product_deleted_id_res : product_deleted_id_res
            },
            success:function(data){
                // $("#btn_checkout").val(data);
                console.log(data);
            }
        })
    })


});