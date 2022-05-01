
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
const close = document.getElementById('close')
let body = document.getElementsByTagName("body")[0]
let elemnt = body.children[2]
open.addEventListener("click", ()=>{
    body.appendChild(elemnt)
    body.removeChild(open)
    body.insertBefore(close, elemnt)
})
close.addEventListener("click", ()=>{
    body.removeChild(elemnt)
    body.removeChild(close)
    body.appendChild(open)
})
body.removeChild(elemnt)
body.removeChild(close)