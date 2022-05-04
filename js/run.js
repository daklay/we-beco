const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});
signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});


const open = document.getElementById('open')
const close = document.getElementById('btnaccount')
let elemnt = document.getElementById('accountcon')
open.addEventListener("click", ()=>{
    body.appendChild(elemnt)
    elemnt.style.opacity = '1'
})
close.addEventListener("click", ()=>{
    body.removeChild(elemnt)
})
body.removeChild(elemnt)