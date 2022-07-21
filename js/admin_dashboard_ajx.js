
    var selectcommand = document.getElementsByClassName("statusupdate");
    var commndid = 'null';
    var selectval = 'encoure';
    [...selectcommand].forEach(e=>{
        e.addEventListener("change", (b)=>{
            selectval = e.value
            commndid = b.target.parentElement.parentElement.firstElementChild.textContent
            // console.log(selectval)
        })
    })
// // ??merge them
// // function commandeid(){
//     var selectcommandd = document.getElementsByClassName("updatebutton");
//     var commndid;
//     [...selectcommandd].forEach(e=>{
//         e.addEventListener("click", (e)=>{
//             commndid = e.target.parentElement.parentElement.firstElementChild.textContent
//             // console.log(commndid)
//         })
//     })
//     // return commndid
// // }

$(document).ready(()=>{
    $(".updateCommande").click(()=>{
        var action = "updateCommande";
        var selectvalajx = selectval;
        var command_id = commndid;
        // selectval = "test";
        alert(action)
        $.ajax({
            url : "adminaction.php",
            method : "POST",
            dataType : "html",
            data : {
                action : action,
                selectvalajx : selectvalajx,
                command_id : command_id
            },success:function(data){
                // $("#alert").html(data);
                console.log(data);
                // alert(data);
            }
        })
    })
           
})