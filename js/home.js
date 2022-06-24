// ///////////////// products hover effect //////////////////////////
// function hover(x){
//     console.log(x.alt)
//     switch (x.alt) {
//         case 1:
//             x.src="images/1-1.png";
//             break;
//         case 2:
//             x.src="images/1-1.png";
//             break;
//         case 3:
//             x.src="images/1-1.png";
//             break;
//         case 4:
//             x.src="images/1-1.png";
//             break;
//     }
//     // x.src="images/1-1.png";
//     // console.log(x.alt)
// }
// function unhover(y){
//     switch (y.alt) {
//         case 1:
//             y.src="images/1-1.png";
//             break;
//         case 2:
//             y.src="images/1-1.png";
//             break;
//         case 3:
//             y.src="images/1-1.png";
//             break;
//         case 4:
//             y.src="images/1-1.png";
//             break;
//     }
//     // y.src="images/new1.png"; 
// } 


///////////// product hero section

var btnright = document.getElementById("btn1");
var btnleft = document.getElementById("btn2");
var sectionindex = 0;
var productslide = document.getElementById("productslide")

btnright.addEventListener("click", ()=>{
    sectionindex = (sectionindex < 2) ? sectionindex + 1 : 2;
    productslide.style.transform = 'translate('+ (sectionindex) * -100 +'%)';
})
btnleft.addEventListener("click", ()=>{
    sectionindex = (sectionindex > 0) ? sectionindex - 1 : 0;
    productslide.style.transform = 'translate('+ (sectionindex) * -100 +'%)';
})



