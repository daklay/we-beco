<?php
    session_start();
    require "dbclass.php";
    $user_id = $_SESSION['$user_id'];
    if(!isset($user_id)){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8579b38148.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon.png" >
    <link rel="stylesheet" href="styles/template.css">
    <script src="js/cart.js" defer></script>
    <script src="js/run.js" defer></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/checkoutpageajx.js" defer></script>
    <link rel="stylesheet" href="styles/checkout.css">
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <!-- cart -->
    <?php include "includes/cart.php" ?>
    <!-- cart -->
    <?php include "includes/acountpopup.php" ?>
    <!-- header -->
    <?php include "includes/header.php" ?>
    <!-- checkoutandcart -->
    <div class="maincheckoutbodyP">
        <div class="alreadycartP">
            <div class="cardcontainerP">
                <div class="cardheaderP">
                    <div class="xP">
                        <h2>Cart(<?php echo count($getcartstock) ?>)</h2>
                    </div>
                    <p>Free Shipping, 30 Days Return, 1 Year Warranty</p>
                    <!-- <div class="divider"></div> -->
                </div>
                <div class="cardbodyP">
                    <?php  
                        foreach($getcartstock as $cart){
                            ?>
                            <ul class="productslistP">
                                <li>
                                    <div class="startP">
                                        <p><?php echo $cart['name'];?></p>
                                        <p class="priceP"><?php echo $cart['price'];?> DH x <?php echo $cart['quantity'];?></p>
                                    </div>
                                   
                                    <div class="endP">
                                        <img src="<?php echo $cart['image'];?>" alt="err" style="height: 100px;">
                                    </div>
                                </li>
                            </ul>                        
                            <?php
                        }
                    ?>
                    <form action="">
                        <input class="codepromo1P" type="text" placeholder="code promo">
                        <button>Apply</button>
                    </form>
                </div>
                <div class="cardfooterP">
                    <div class="totalP">
                        <p>Subtotal</p>
                        <p>4,000.00 Dh</p>
                    </div>
                    <div class="btncheckoutcardP">
                        <!-- <form action="">
                            <input type="submit" value="CONFIRM">
                        </form> -->
                        <a href="#" id="confirm">CONFIRM</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkoutinfo">
            <div class="personalinfo">
                <h3>Personal Information</h3>
                <form action="">
                    <div>
                        <input type="text" placeholder="votre Nom">
                        <input type="text" placeholder="votre Prenom" id="prenom">
                    </div>
                    <div>
                        <input type="text" placeholder="company">
                        <input type="email" placeholder="email">
                    </div>
                    <div>
                        <input type="text" placeholder="pays" id="country">
                        <input type="number" placeholder="code postal" id="codepostal">
                    </div>
                    <div>
                        <input type="text" placeholder="adresse" id="adresse">
                    </div>
                    <div>
                        <input type="text" placeholder="numero de telephone" id="tele">
                    </div>
                </form>
            </div>
            <div class="paymentsdetails">
                <h3>Payments Details</h3>
                <form action="">
                    <div>
                        <input type="text" placeholder="Credit Card Number">
                    </div>
                    <div>
                        <input type="text" placeholder="Security code">
                        <input type="text" placeholder="Expiration Date">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>