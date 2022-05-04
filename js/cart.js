// cart
var closecart =document.querySelector('.x i');
var opencart = document.getElementById('carticon')
var cart = document.getElementById("cart")
let body = document.getElementsByTagName("body")[0]
var header = document.getElementById('header')

opencart.addEventListener("click", ()=>{
    // body.insertBefore(cart, header)
    body.appendChild(cart)
    cart.style.opacity = '1'
})
closecart.addEventListener("click", ()=>{
    body.removeChild(cart)
    cart.style.opacity = '0'
})
body.removeChild(cart)