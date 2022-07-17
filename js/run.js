const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const cartt = document.getElementById("cart");
signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
    // closee.style.color = "white"
    closee.style.left = "730px"
});
signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
    closee.style.left = "15px"
});


const open = document.getElementById('open')
const closee = document.getElementById('btnaccount')
let elemnt = document.getElementById('accountcon')
// ! add condition
if(open.children[0].getAttribute('href') == '#'){
    open.addEventListener("click", ()=>{
        // body.appendChild(elemnt);
        body.insertBefore(elemnt, cartt);
        elemnt.style.opacity = '1'
    })
}

closee.addEventListener("click", ()=>{
    body.removeChild(elemnt)
})
body.removeChild(elemnt)