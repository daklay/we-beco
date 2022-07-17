filterSelection("footerproductpageAll");
function filterSelection(e){
    var x,i;
    x = document.getElementsByClassName("hide");
    for(i=0; i<x.length; i++){
        removeClass(x[i], "show");
        if(x[i].className.indexOf(e) > -1) {addClass(x[i], "show")};
    }
}

function addClass(element, name){
    var arr;
    arr = element.className.split(" ");
    if(arr.indexOf(name) == -1) {element.className+= " " +name;}
}

function removeClass(element, name){
    var i, arr;
    arr = element.className.split(" ");
    if(arr.indexOf(name) > -1){
        arr.splice(arr.indexOf(name), 1);
    }
    element.className = arr.join(" ");
}


// var btnContainer = document.getElementById("navlistespace");
var btns = document.getElementsByClassName("btnactP");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("activeProductNav");
    current[0].className = current[0].className.replace(" activeProductNav", "");
    this.className += " activeProductNav";
  });
}