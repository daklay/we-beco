

function get_filter_text(text_id){
    var filterData = [];
    var test = document.querySelectorAll(`.${text_id}:checked`)
    for(let i=0; i<test.length;i++){
        filterData.push(test[i].value);
    }
    return filterData;
}
function get_filter_text2(text_id){
    var filterData = [];
    var test = document.querySelectorAll(`.${text_id}`)
    for(let i=0; i<test.length;i++){
        filterData.push(test[i].value);
    }
    return filterData;
}

$(document).ready(()=>{


    // function get_filter_text(text_id){
    //     var filterData = [];
    //     $('#'+text_id+':checked').each(()=>{
    //         filterData.push($(this.target).val());
    //     })
    //     return filterData;
    // }
    $("#btn").click(()=>{
        $('#loader').show();
        var action = 'data';
        var categories = get_filter_text('product_check');
        var brand = get_filter_text('imgbrndinput');
        var price = get_filter_text2('range');

        $.ajax({
            url: 'actionfilter.php',
            method : 'POST',
            dataType: 'html',
            data: {
                action: action,
                categories: categories,
                brand : brand,
                price : price
            },
            success:function(data){
                $("#result").html(data);
                console.log(data);
                $("#loader").hide();
            }
        })

    })


});