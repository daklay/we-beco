<?php 
session_start();
if(isset($_SESSION['$user_id'])){
    $user_id = $_SESSION['$user_id'];
}
include "dbclass.php";
$objProductpage = new test();
$singleProductInfo = $objProductpage->getProductById($_GET['product_id']);
$singleproduct_id = $_GET['product_id'];
// print_r($singleProductInfo);
foreach($singleProductInfo as $singleProduct){
    $title = $singleProduct['product_name'];
    $categorie = $singleProduct['categorie'];
    $brand = $singleProduct['brand'];
    $price = $singleProduct['price'];
    $image = $singleProduct['product_images'];
}
$objrev1 = new comments();
if(isset($_POST['reviewsbtn'])){
    $comment = $_POST['comments'];
    $product_id = $_POST['product_id'];
    $rev1 = $objrev1->insertComment($comment,$user_id,$product_id);
}
$objgetrev1 = new comments();
// $getrev1 = $objgetrev1->getCommentsByUserProduct_Id(2,6);
// $getrev1 = $objgetrev1->getCommentsByUserProduct_Id($user_id,$_GET['product_id']);
$getrev1 = $objgetrev1->getCommentsByProduct_Id($_GET['product_id']);
// print_r($userall);
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
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/run.js" defer></script>
    <script src="js/loginvalidation.js" defer></script>
    <script src="js/productpageajx.js" defer></script>
    <script src="js/productpagejs.js" defer></script>
    <link rel="stylesheet" href="styles/productpage.css">
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <style>
        .imageheaderproduct{
            background-image: url(./<?php echo $image ?>);
        }
    </style>
    <div id="alert1">
        <?php
        unset($_SESSION['cartalert']);
        ?>
    </div>
    <!-- login/register -->
    <?php include "includes/acountpopup.php" ?>
    <!-- cart -->
    <?php  include "includes/cart.php" ?>
    <!-- header -->
    <?php include "includes/header.php" ?>
    <!-- product -->
    <div class="containerproductpage">
        <div class="wrippterpage">
            <div class="headproductpage">
                <div class="imageheaderproduct">

                </div>
                <div class="productsnextimageinfo">
                    <div class="productpath">No ordinateur/produit</div>
                    <div class="producttitle"><?php echo $title ?></div>
                    <div class="productreviews">
                        <div class="reviewsstars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="reviewcommentsection">
                            Poster un commentaire
                        </div>
                    </div>
                    <div class="productprice">
                        <div class="actualprice"><?php echo $price ?>.00 DH</div>
                        <div class="oldprice">1,930.00 DH</div>
                    </div>
                    <div class="productdescription">
                        <div class="descriptiontitle">
                            Description
                        </div>
                        <div class="descriptiontext">
                            Product title script text carte sons and many others product title script text carte sons and many othersProduct title script text carte sons and many others product title script text carte sons and many others .
                        </div>
                    </div>
                    <div class="productenstock">en stock</div>
                    <div class="productbtn">
                        <div class="enstockbtn">
                            <select name="stockselectname" id="stockselectid">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div id="addtocartpagebtn" class="addtocartpagebtn">
                            <button value="<?php echo $singleproduct_id ?>" >AJOUTER AU PANIER</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bodyproductpage">
                <ul>
                    <li class="btnactP activeProductNav" onclick="filterSelection('footerproductpageAll')">Description</li>
                    <li class="btnactP" onclick="filterSelection('footerproductpagereviewsAll')">Review</li>
                    <li class="btnactP" >Video</li>
                </ul>
            </div>
            <!-- //! first footer start from here -->
            <div class="show_hide_container">
                <div class="hide footerproductpageAll"> 
                    <div class="footerproductpage">
                        <div class="descriptionimgsproduct">
                            <div class="overviewproductimg">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="largeproductdescription">
                            <div class="largedescription">
                                <div class="composantdes">
                                    <table>
                                        <tr>
                                            <th>Overview</th>
                                            <th>Cordonne de pc</th>
                                        </tr>
                                        <tr>
                                            <td>ram</td>
                                            <td>5gb ram ssd ddr4</td>
                                        </tr>
                                        <tr>
                                            <td>cpu</td>
                                            <td>carte graphique nivida gtx</td>
                                        </tr>
                                        <tr>
                                            <td>ecran size</td>
                                            <td>16gb ram ssd ddr4</td>
                                        </tr>
                                        <tr>
                                            <td>disque dure</td>
                                            <td>16gb ram ssd ddr4</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="pclargedescription">
                                    <table>
                                        <tr>
                                            <th>Description</th>
                                        </tr>
                                        <tr>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illum quibusdam voluptate culpa sed reiciendis unde eius magni. Consequuntur est id tempore saepe beatae eum optio minima maxime laboriosam cupiditateLorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illum quibusdam voluptate culpa sed reiciendis unde eius magni. Consequuntur est id tempore saepe beatae eum optio minima maxime laboriosam cupiditateLorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illum quibusdam voluptate culpa sed reiciendis unde eius magni. Consequuntur est id tempore saepe beatae eum optio minima maxime laboriosam cupiditate.</td>
                                        </tr>
                                    </table>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hide footerproductpagereviewsAll" >
                    <div class="footerproductpagereviews">
                        <div class="commentsecion">
                            <form action="" method="POST">
                                <input type="hidden" name="product_id" value="<?php echo $singleproduct_id ?>">
                                <input type="text" class="comments" name="comments" placeholder="votre commentaire">
                                <input type="submit" value="commenter" name="reviewsbtn">
                            </form>
                            <?php 
                            foreach($getrev1 as $comment){
                                ?>
                                <div class="oldcomments">
                                    <div class="name_stars_reviews">
                                        <div class="user_name"><?php echo $comment['nom']." ".$comment['prenom']?></div>
                                        <!-- <div class="user_stars"></div> -->
                                        <div class="reviewsstars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="comment_reviews">
                                        <p><?php echo $comment['commentaire'] ?></p>
                                    </div>
                                    <div class="date_reviews"><?php echo $comment['date'] ?></div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="footermenu">
            <div class="div1 width">
                <div class="logo2">
                    <a href="#"><img src="images/LOGOPNG-24.png" alt="navlogo" width="175" height="87.5"></a>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus minus architecto, molestias beatae voluptatem</p>
                </div>
            </div>
            <div class="div2 width">
                <ul>
                    <li><h2><a href="#">Nos ordinateurs</a></h2></li>
                    <li><a href="#">Nos ordinateurs de bureau</a></li>
                    <li><a href="#">Mini PC</a></li>
                    <li><a href="#">Ordinateurs protables</a></li>
                </ul>
            </div>
            <div class="div3 width">
                <ul>
                    <li><h2><a href="#">Aide</a></h2></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Mentions legales</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="div4 width">
                <ul>
                    <li><h2><a href="presse.html">Presse</a></h2></li>
                    <li><h2><a href="#">Nos coffrets</a></h2></li>
                    <li><h2><a href="#">Qui sommes-nous?</a></h2></li>
                    <li><h2><a href="#">Blog</a></h2></li>
                </ul>
            </div>
        </div>
        <div class="spacer">
            <span class="divider"></span>
        </div>
        <div class="footerALLright">
            <div class="allrights">
                <p>All rights reserved © 2022</p>
            </div>
            <div class="icons">
                <ul>
                    <li><i class="fa-brands fa-facebook-square fa-xl"></i></i></li>
                    <li><i class="fa-brands fa-instagram-square fa-xl"></i></i></li>
                    <li><i class="fa-brands fa-twitter-square fa-xl"></i></li>
                </ul>
            </div>
        </div>
    </div>
    
    <script src="js/togglemenu.js"></script>
</body>
</html>