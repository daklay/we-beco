let openstart = document.getElementById("open");
openstart.addEventListener("click", ()=>{
    let loginbtn = document.getElementById("login");
    let registerbtn = document.getElementById("register");
    // let formsubmit = document.getElementById("formregister");

    function registerverification(){
        let name = document.getElementById("nameregister");
        let email = document.getElementById("emailregister");
        let password = document.getElementById("passwordregister");
        let termscheck = document.getElementById("termscheckbox");
        let emailreg = /[a-zA-Z0-9]+@[a-zA-Z]+\.[a-z]\w+$/;
        if(name.value.length < 5){
            throw "name err";
        }
        if(email.value.search(emailreg) != 0){
            throw "email err";
        }
        let passwordreg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
        if(password.value.search(passwordreg) != 0){
            throw "pass err";
        }
        if(!termscheck.checked){
            throw "tems err";
        }
}

registerbtn.addEventListener("click",(e)=>{
    let m = true;
    try{
        registerverification();
    }catch(e){
        console.log(e)
        m = false;
    }
    finally{
        if(m == false){
            e.preventDefault();
        }
    }
})
})