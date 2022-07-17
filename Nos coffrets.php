<?php 
    include "dbclass.php";
    $getPacksobj = new packs();
    $getPacks = $getPacksobj->getPacks();
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
    <link rel="stylesheet" href="styles/nocoffrets.css">
    
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
            <h1>The ultimate plateform</h1>
            <p>Lorem ipsum dolor, sit amet consectetur.</p>
        </div>
    </div>
    <!-- thepack section -->
    <div class="thepackcontainer">
        <div class="thepackflex">
            <?php 
                foreach($getPacks as $p){
                    ?>
                    <div class="thecardpack">
                        <div class="packheader">
                            <div class="titlepack"><?php echo $p['pack_name'] ?></div>
                            <p><?php echo $p['price'] ?><sup>DH</sup></p>
                            <div class="optionpack">OPTION</div>
                        </div>
                        <div class="packbody">
                            <div><i class="fa-solid fa-check"></i><p>160 of the best coding interview question.</p></div>
                            <div><i class="fa-solid fa-check"></i><p>160 of the best coding interview question.</p></div>
                            <div><i class="fa-solid fa-check"></i><p>160 of the best coding interview question.</p></div>
                            <div><i class="fa-solid fa-check"></i><p>160 of the best coding interview question.</p></div>
                            <div><i class="fa-solid fa-check"></i><p>160 of the best coding interview question.</p></div>
                            <div><i class="fa-solid fa-check"></i><p>160 of the best coding interview question.</p></div>
                        </div>
                        <div class="packfooter">
                            <div class="btnaddtocartpack">
                                <a href="#">ADD TO CART</a>
                            </div>
                        </div>
                    </div>                        
                    <?php
                }
            ?>
        </div>
    </div>
    <!-- footer -->
    <?php include "includes/footer.php" ?>
</body>
</html>