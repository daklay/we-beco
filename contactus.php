<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8579b38148.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon.png" >
    <link rel="stylesheet" href="styles/template.css">
    <link rel="stylesheet" href="styles/contactus.css">

    <script src="js/cart.js" defer></script>
    <script src="js/run.js" defer></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/productsarchivepageajx2.js" defer></script>
    <script src="js/addtocartajx.js" defer></script>
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <!-- account popup -->
    <?php include "includes/acountpopup.php" ?>
    <!-- cart  -->
    <?php include "includes/cart.php" ?>
    <!-- header -->
    <?php include "includes/header.php" ?>
    <!-- hero section -->
    <div class="herosectionpc">
        <div class="textheropccontainer">
            <h1>Contact Us</h1>
            <p>Contact us what are you looking for Lorem Ipsum</p>
            <div class="iconshe">
                <ul>
                    <li><i class="fa-brands fa-facebook-square fa-2xl"></i></i></li>
                    <li><i class="fa-brands fa-instagram-square fa-2xl"></i></i></li>
                    <li><i class="fa-brands fa-twitter-square fa-2xl"></i></li>
                    <li><i class="fa-brands fa-whatsapp-square fa-2xl"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- contact us -->
    <div class="containercontactus">
        <div class="calltoactionform">
            <h5>Call to action, You need help?</h5>
            <div class="callway">
                <div class="calldivs"><i class="fa-solid fa-phone"></i>  06-000000</div>
                <div class="calldivs"><i class="fa-solid fa-location-dot"></i> Lorem ipsum lorem izit</div>
                <div class="calldivs"><i class="fa-solid fa-envelope"></i> contactus@ordishop.ma</div>
            </div>
        </div>
        <div class="contactusform">
            <div class="formheader">
                <div class="icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                <div class="textformheader">
                    <p>Contact Us what are you looking for lorem ipsum its just a term if you dont know anything lorem.</p> 
                </div>
            </div>
            <form action="contactusconf.php" method="post">
                <div>
                    <input type="text" placeholder="Votre Nom" name="name">
                    <input type="text" placeholder="Company" name="company">
                </div>
                <div>
                    <input type="text" placeholder="Email" name="email">
                    <input type="text" placeholder="Phone" name="phone">
                </div>
                <div class="lastdiv"><input type="text" placeholder="Message" name="message"></div>
                <div class="filediv">
                    <input type="file" accept=".png, .jpg" name="file" name="file">
                </div>
                <!-- <div class="termscondition" style="height: 40px;">
                    <input type="checkbox">
                    <p>Send me a copy of my responses</p>
                </div> -->
                <div><button>send</button></div>
            </form>
        </div>
    </div>
    <!-- spacer -->
    <!-- <div class="thespacer"></div> -->
    <!-- footer -->
    <?php include "includes/footer.php" ?>
    

</body>
</html>