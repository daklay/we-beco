let prenom = document.getElementById("prenom");
let adresse = document.getElementById("adresse");
let tele = document.getElementById("tele");
let country = document.getElementById("country");
let codepostal = document.getElementById("codepostal");
let total = document.getElementsByClassName("totalP")[0];
$(document).ready(()=>{
    $("#confirm").click((e)=>{
        e.preventDefault();
        let prenomv = prenom.value;
        let adressev = adresse.value;
        let telev = tele.value;
        let countryv = country.value;
        let codepv = codepostal.value;
        let action = "action";
        let totalv = total.lastElementChild.textContent;
        $.ajax({
            url: 'actioncheckout.php',
            method : 'POST',
            dataType : 'html',
            data:{
                prenomv : prenomv,
                adressev : adressev,
                telev : telev,
                action : action,
                totalv : totalv,
                countryv : countryv,
                codepv : codepv
            },success:function(data){
                console.log(data)
            }
        })
    })
})