////////////////////////// * toggle menu * ///////////

const primarymenu = document.querySelector(".navlist");
const navtoggle = document.querySelector(".navtoggle");
const test = document.querySelector(".logo1");

navtoggle.addEventListener("click", ()=>{
    primarymenu.style.opacity = "1"
    primarymenu.classList.toggle("navlist2");
    navtoggle.classList.toggle("navtogglex")
})