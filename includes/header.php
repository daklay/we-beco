<!-- header -->
<?php 
    // $index = "";
    // $nosordinateur = "";
    // $noscoffrets = "";
    // $nousfournisseurs = "";
    // $quisommesnous = "activeheader";
?>
<nav id="header" class="header">
    <nav class="navbar">
        <div class="logo1">
            <a href="index.php"><img src="images/LOGOPNG-24.png" alt="navlogo" width="87.5" height="43.75"></a>
        </div>
        <div class="navtoggle"></div>
        <div class="navlist">
            <ul>
                <li><a href="index.php" class="navaelmnt <?php echo @$index?>">Home</a></li>
                <li><a href="Nos ordinateurs.php" class="navaelmnt <?php echo @$nosordinateur?>">Nos ordinateurs</a></li>
                <li><a href="Nos coffrets.php" class="navaelmnt <?php echo @$noscoffrets?>">Nos coffrets</a></li>
                <li><a href="Nous fournisseurs.php" class="navaelmnt <?php echo @$nousfournisseurs?>">Nos fournisseurs</a></li>
                <li><a href="Qui sommes-nous.php" class="navaelmnt <?php echo @$quisommesnous?>">Qui sommes-nous</a></li>
                <li><a href="Blog.php" class="navaelmnt ">Blog</a></li>
                <!-- // ! if isset to change the link -->
                <?php 
                    if(isset($_SESSION['isconnected'])){
                        echo  '<li id="open"><a href="espace client.php" class="width0"><i class="fa-solid fa-user"></i></a></li>';
                    }
                    else{
                        echo  '<li id="open"><a href="#" class="width0"><i class="fa-solid fa-user"></i></a></li>';
                    }
                ?> 
                <li id="carticon"><a href="#" class="width0"><i class="fa-solid fa-basket-shopping"></i></a></li>
            </ul>
        </div>
    </nav>
    <div class="promo">
        <p>Lorem ipsum dolor sit amet. Odio corporis numquam autem eum laboriosam!</p>
        <p class="p2mobile">Promo click here to buy</p>
        <div class="btn-chr">
            <!-- <ul>
                <li class="days">01<span> DAYS</span></li>
                <li class="hours">05<span> HRS</span></li>
                <li class="min">37<span> MIN</span></li>
                <li class="sec">11<span> SEC</span></li>
            </ul> -->
            <ul>
                <li class="days"></li>
                <li class="hours"></li>
                <li class="min"></li>
                <li class="sec"></li>
            </ul>
            <button>Buy now</button>
        </div>
    </div>
</nav>