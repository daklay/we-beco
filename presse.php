<?php 
include "dbclass.php";
$getPressobj = new press();
$getPress = $getPressobj->getPress();
foreach($getPress as $p){
    $image = $p['press_img'];
    $title = $p['press_title'];
    $htitle = $p['press_htitle'];
    $date = $p['press_date'];
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
    <link rel="stylesheet" href="styles/presse.css">

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
    <!-- presse body -->
    <div class="containerblogbody">
        <div class="linecontainerblogcard">
            <div class="card card1">
                <div class="imagedivparent" style=" height: 400px;">
                    <div class="imagecoverb imgcoverbunique" style="background-image: url(<?php echo $image?>);"></div>
                </div>
                <div class="contanttopofpress">
                   <div class="notextc textcontent">
                        <h3><?php echo $title?></h3>
                        <p><?php echo $htitle?></p>
                    </div>
                    <div class="nobtns btnseemore">
                        <p><?php echo $date?></p>
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="linecontainerblogcard">

            <?php foreach($getPress as $p){
                ?>
                    <div class="card">
                        <div class="imagedivparent">
                            <div class="imagecoverb" style="background-image: url(<?php echo $p['press_img']?>);"></div>
                        </div>
                        <div class="textcontent">
                            <h3><?php echo $p['press_title']?></h3>
                            <p><?php echo $p['press_htitle']?></p>
                        </div>
                        <div class="btnseemore">
                            <p><?php echo $p['press_date']?></p>
                        </div>
                    </div>                
                <?php

            } ?>
        </div>
    </div>
    <!-- footer -->
    <?php include "includes/footer.php" ?>
</body>
</html>