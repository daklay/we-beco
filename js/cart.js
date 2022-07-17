// cart
var closecart =document.querySelector('.x i');
var opencart = document.getElementById('carticon')
var cart = document.getElementById("cart")
let body = document.getElementsByTagName("body")[0]
var header = document.getElementById('header')

opencart.addEventListener("click", ()=>{
    // body.insertBefore(cart, header)
    // body.appendChild(cart)
    cart.style.display = "flex"
    cart.style.opacity = '1'
})
closecart.addEventListener("click", ()=>{
    // body.removeChild(cart)
    cart.style.display = "none"
    cart.style.opacity = '0'
})
// body.removeChild(cart)

// cart counter js
let check = document.getElementsByClassName("start")[0];
if(check.getAttribute("id") == "full"){
    let counterDisplayElem = document.querySelectorAll('.displaycounter');
    let counterMinusElem = document.querySelectorAll('.fa-minus');
    let counterPlusElem = document.querySelectorAll('.fa-plus');
    let res = document.querySelector(".cart_res");
    let product_price = document.querySelectorAll(".price");
    let sum=0;
    for(let i=0; i<product_price.length; i++){
        sum += Number(product_price[i].textContent.match(/\d+/)[0]) * Number(counterDisplayElem[i].textContent) ;
    }

    let count = 1;
    res.innerHTML = sum+" DH";
    counterPlusElem.forEach(el => {
        el.addEventListener("click", (e)=>{
            let max = e.target.parentElement.previousElementSibling.value;
            count = Number(e.target.nextElementSibling.textContent);
            if(count < max){
                count++;
                // console.log(e.target.nextElementSibling);
                let sum=0;

                e.target.nextElementSibling.innerHTML = count;
                for(let i=0; i<product_price.length; i++){
                    sum += Number(product_price[i].textContent.match(/\d+/)[0]) * Number(counterDisplayElem[i].textContent) ;
                }
                
                res.innerHTML = sum+" DH";
            }
            
        })
    });
    counterMinusElem.forEach(el => {
        el.addEventListener("click", (e)=>{
            count = Number(e.target.previousElementSibling.textContent);
            if(count != 0) {
                
            
                count--;
                // console.log(e.previousElementSibling)
                let sum=0;

                e.target.previousElementSibling.innerHTML = count;
                for(let i=0; i<product_price.length; i++){
                    sum += Number(product_price[i].textContent.match(/\d+/)[0]) * Number(counterDisplayElem[i].textContent) ;
                }
                
                res.innerHTML = sum+" DH";
            }
        })
    });


    // let stock = document.getElementsByClassName("stock");
    // stock.forEach( (j)=>{
    //     console.log(j.value)
    // });
    // counterMinusElem.forEach(el => {
    //     el.addEventListener("click", (e)=>{
    //         let max = e.target.parentElement.previousElementSibling.value;
    //         console.log(test)
    //     })
    // });
}