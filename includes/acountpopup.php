<!-- popup account -->
<div id="accountcon" class="accountcon">
    <div class="container" id="container">
        <a id="btnaccount"><i class="fa-solid fa-xmark"></i></a>
        <div class="form-container sign-up-container">
            <form id="formregister" action="register_login.php" method="POST">
                <h1>Hello, friend!</h1>
                <input type="text" id="nameregister" name="name_register" placeholder="Name"><i class="fa-solid fa-user fa-lg"></i>
                <input type="email" id="emailregister" name="email_register" placeholder="Email"><i class="fa-solid fa-envelope fa-lg"></i>
                <input type="password" id="passwordregister" name="password_register" placeholder="Password" autocomplete="off"><i class="fa-solid fa-lock fa-lg"></i>
                <div style="display: flex; align-items: center; margin: 15px 0;">
                    <input id="termscheckbox" type="checkbox" class="not100" style="margin: 0px; margin-right: 10px;">
                    <p style="margin: 0;">I read and agree to <span style="color:#9E121B; font-weight: 800;">Terms & Conditions</span></p>
                </div>
                <button id="register" name="register_btn">Create Account</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="register_login.php" method="POST">
                <h1>Sign In</h1>
                <input type="email" id="emaillogin" name="email_login" placeholder="Email" required><i class="fa-solid fa-envelope fa-lg"></i>
                <input type="password" id="passwordlogin" name="password_login" placeholder="Password" autocomplete="off" required><i class="fa-solid fa-lock fa-lg"></i>
                <button id="login" name="login_btn"  style="margin: 10px 0;">login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>