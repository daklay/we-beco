<?php 
    include "dbclass.php";
    $nousfournisseurs = "activeheader";
    $getSuppliersobj = new suppliers();
    $getSuppliers = $getSuppliersobj->getSuppliers();
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
    <link rel="stylesheet" href="styles/nosfournisseurs.css">

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
    <!-- herosection -->
    <div class="herosectionpc">
        <div class="textheropccontainer">
            <h1>Our supplier</h1>
            <p>Lorem ipsum dolor, sit amet consectetur.</p>
        </div>
    </div>
    <!-- supplier body card -->
    <div class="supplierbodycard">
        <div class="cardscontainer">
            <?php 
                foreach($getSuppliers as $s){
                    ?>
                        <div class="card1">
                            <div class="face front">
                                <div class="suppimage"><img src="<?php echo $s['logo_sup'];?>" alt="err" width="100%"></div>
                                <h3><?php echo $s['name_sup'];?></h3>
                                <p>hover to see more</p>
                            </div>
                            <div class="face back">
                                <!-- <div class="suppimage"><img src="images/brands/1.png" alt="err" width="100%"></div> -->
                                <h3><?php echo $s['name_sup'];?></h3>
                                <p><?php echo $s['description'];?></p>
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