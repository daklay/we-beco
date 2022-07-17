<?php
    session_start();
    include "dbclass.php";
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
    <script src="js/addtocartajx.js" defer></script>
    <script src="js/loginvalidation.js" defer></script>
    <link rel="stylesheet" href="styles/index.css">
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <?php
    if(isset($_SESSION['alert'])){
        ?>
        <div class="alertmessage">
            <div class="contentalert">
                <p><?php echo $_SESSION['alert']; ?></p>
                <i class="fa-solid fa-xmark" id="closealert" onclick=this.parentElement.parentElement.remove()></i>
            </div>
        </div>
        <?php
        unset($_SESSION['alert']);
    }
    ?>
    <!-- account popup -->
    <?php include "includes/acountpopup.php" ?>
    <!-- cart  -->
    <?php include "includes/cart.php" ?>
    <!-- header -->
    <?php include "includes/header.php" ?>
    <!-- hero section -->
    <div class="hero_section">
        <div class="herotext">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem ipsum sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="buttonhero">
                <!-- <button>For Work</button>
                <button>See More</button> -->
                <a href="#">For Work</a>
                <a href="#">See More</a>
            </div>
        </div>
        <div class="heropic">
            <div class="slideroverf">
                <div class="heropicsub" id="productslide">
                    <img src="images/3.png" alt="heropic">
                    <img src="images/2.png" alt="heropic">
                    <img src="images/1.png" alt="heropic">
                </div>
            </div>
            
            <div class="item_option">
                <i class="fa-solid fa-circle-chevron-left fa-2xl" id="btn2"></i>
                <p>Item name</p>
                <i class="fa-solid fa-circle-chevron-right fa-2xl" id="btn1"></i>
            </div>
        </div>
    </div>
    <div class="languagedropdown">
        <img src="images/flagma.png" alt="err" height="20px">
        <i class="fa-solid fa-angle-up"></i>
    </div>
    <!-- shiping section -->
    <div class="shiping">
        <div class="shipingall">
            <div class="icontxt">
                <div class="iconback">
                    <i class="fa-solid fa-cart-flatbed"></i>
                </div>
                <p>30-day returns
                </p>
            </div>
            <div class="icontxt">
                <div class="iconback">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </div>
                <p>One-year warranty</p>
            </div>
            <div class="icontxt">
                <div class="iconback">
                <i class="fa-solid fa-shield"></i>  
                </div>
                <p>Free shipping</p>
            </div>
        </div>
    </div>
    <!-- categories section -->
    <div class="categoriescontainer">
        <div class="categoriesall">
            <div class="categoriesline1">
                <div class="pcgamer div">
                    <div class="test"><p>Pc gamer</p></div>
                </div>
                <div class="pcbureau div">
                    <div class="test"><p>Pc bureau</p></div>
                </div>
                <div class="pcportable div">
                    <div class="test"><p>pc portable</p></div>
                </div>
            </div>
            <div class="categoriesline2">
                <div class="pcaccessoire div">
                    <div class="test"><p>Accessoire</p></div>
                </div>
                <div class="buildyours div">
                    <div class="test test1">
                        <p>Build your own</p>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section -->
    <div class="productallcontainer">
        <div class="productdflex">
            <div class="producthead">
                <h2>New products</h2>
                <p>this is the subtitle</p>
            </div>
            <div class="productcontainer">
                <div class="divo">
                    <span class="promoproduct">-50%</span>
                    <div class="img">
                        <img src="images/new1.png" alt="1" width="80%"/>
                        <img src="images/1-1.png" alt="1" width="80%"/>
                    </div>
                    <div><p class="categoriepro">categories</p></div>
                    <div><p>Dell Latitude 3520 Laptop, 15.6" HD Display, Intel Core i5-1135G7 ...</p></div>
                    <div><div class="pricepro">
                        <p>7000 DH</p>
                        <span>Add to cart</i></span>
                    </div></div>
                </div>
                <div class="divo">
                    <div class="img">
                        <img src="images/new5.png" alt="2" width="80%"/>
                        <img src="images/5-2.png" alt="2" width="80%"/>
                    </div>
                    <div><p class="categoriepro">categories</p></div>
                    <div><p>Dell Latitude 3520 Laptop, 15.6" HD Display, Intel Core i5-1135G7 ...</p></div>
                    <div><div class="pricepro">
                        <p>7000 DH</p> 
                        <span>Add to cart</span>
                    </div></div>
                </div>
                <div class="divo">
                    <div class="img">
                        <img src="images/new3.png" alt="3" width="80%">
                        <img src="images/3-2.png" alt="3" width="80%">
                    </div>
                    <div><p class="categoriepro">categories</p></div>
                    <div><p>Dell Latitude 3520 Laptop, 15.6" HD Display, Intel Core i5-1135G7 ...</p></div>
                    <div><div class="pricepro">
                        <p>7000 DH</p> 
                        <span>Add to cart</span>
                    </div></div>
                </div>
                <div class="divo">
                    <div class="img">
                        <img src="images/new4.png" alt="4" width="80%">
                        <img src="images/4-2.png" alt="4" width="80%">
                    </div>
                    <div><p class="categoriepro">categories</p></div>
                    <div><p>Dell Latitude 3520 Laptop, 15.6" HD Display, Intel Core i5-1135G7 ...</p></div>
                    <div><div class="pricepro">
                        <p>7000 DH</p> 
                        <span>Add to cart</span>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us section -->
    <div class="aboutus">
        <div class="insideaboutus">
            <div class="videodiv">
                <video width="500" height="281.25" id="video">
                    <source src="images/office.mp4" type="video/mp4">
                    Your browser does not support the video tag
                </video>
                <i class="fa-solid fa-play"></i>
            </div>
            <div class="textdiv">
                <div class="div1"><h2>About Us Exameple landing</h2></div>
                <div class="div2"><h5>About Us title Example</h5></div>
                <div class="div3"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel possimus voluptates aliquam dolor sit amet consectetur adipisicing elit. Vel consequatur natus hic inventore iusto consequuntur quidem facilis, omnis, facere sit laborum necessitatibus nobis modi veniam impedit officiis.</p></div>
                <div class="div4"><a href="#">Read More...</a></div>
            </div>
        </div>
    </div>
    <!-- our brands section -->
    <div class="brandscontainer">
        <div class="brandsall">
            <div class="ourbrands">
                <div><h3>OUR BRANDS</h3></div>
            </div>



            <div class="brandsimg">
                <div class="wrapperslider">
                    <div class="parti" >
                        <div class="img"><img src="images/brands/1.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/3.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/2.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/4.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/6.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/5.png" alt="err" width="100%"></div>
                    </div>
                    <div class="parti">
                        <div class="img"><img src="images/brands/1.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/3.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/2.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/4.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/6.png" alt="err" width="100%"></div>
                        <div class="img"><img src="images/brands/5.png" alt="err" width="100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- spacer -->
    <!-- <div class="thespacer"></div> -->
    <!-- newsletter -->
    <div class="newslettercontainer">
        <div class="newsletterall">
            <div class="leftside">
                <div class="text">
                    <h2>Subscribe to our Newsletter Example</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem libero sunt dolorem itaque, recusandae architecto totam animi iure quos fuga.</p>
                </div>
                <div class="formnewsletter">
                    <form action="">
                        <input type="email" placeholder="Your email">
                        <button>Subscribe</button>  
                    </form>
                </div>
                
            </div>
            <div class="rightside">
                <img src="images/newsletterimg.png" alt="err" height="100%">
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include "includes/footer.php" ?>
    <!-- script -->
    <script src="js/home.js"></script>
    <script src="js/togglemenu.js"></script>
</body>
</html>