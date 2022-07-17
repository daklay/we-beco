<?php
    session_start();
    include "dbclass.php";
    $obj1 = new test();
    $categories =$obj1->getCat();
    $obj2 = new test();
    $products = $obj2->getAll();
    $obj3 = new test();
    $brandimg= $obj3->getBrand();
    // pagination
    $nbrelmnt = 12;
    $nbrpage =  ceil(count($products)/$nbrelmnt);
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        $startval = ($page-1)*$nbrelmnt;
        $objpaginationobj = new test();
        // $objpagination = $objpaginationobj->getAllPagination($startval, $nbrelmnt);
        $objpagination = $objpaginationobj->getAllPagination($startval);
        $products = $objpagination;    
        // print_r( $objpagination);
        
    }
    if(isset($_GET['categorie'])){
        $getProductByCategoriesobj = new test();
        if($_GET['categorie'] == "pcgamer"){
            $getProductByCategories = $getProductByCategoriesobj->getWhereProducts("pc gamer");
        }
        elseif($_GET['categorie'] == "pcbureau"){
            $getProductByCategories = $getProductByCategoriesobj->getWhereProducts("pc bureau");
        }
        elseif($_GET['categorie'] == "pcportable"){
            $getProductByCategories = $getProductByCategoriesobj->getWhereProducts("pc portable");
        }
        $products = $getProductByCategories;
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
    <link rel="stylesheet" href="styles/nosordinateurs.css">
    <script src="js/cart.js" defer></script>
    <script src="js/run.js" defer></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/productsarchivepageajx2.js" defer></script>
    <script src="js/addtocartajx.js" defer></script>
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <!-- //! issue with the unset session / and vidwo 43:33 -->
    <div id="alert">
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
    <!-- hero section -->
    <div class="herosectionpc">
        <!-- <div class="textheropccontainer">
            <h1>Products</h1>
            <h1>Archive title</h1>
        </div> -->
    </div>
    <!-- product section all -->
    <div class="productsectionall">
        <div class="productfilter">
            <div class="filtertxt productsectionallchild"><p>Price</p></div>
            <div class="fromupto productsectionallchild">
                <div class="fromprice"><span>From</span><input type="number" value="100" disabled></div>
                <div class="uptoprice"><span>Up to</span><input id="uptoprice" type="number" min="0" max="10000" value="3000" disabled ></div>
            </div>
            <div class="filterslide productsectionallchild">
                <input class="range product_check" type="range" min="0" max="10000" value="3000" oninput="uptoprice.value=value" >
            </div>
            <div class="filtertxt">Categorie</div>
            <div class="themeoption productsectionallchild">
                <div class="checkboxopt">
                    <?php
                        foreach($categories as $cat){
                    ?>

                            <label><?php echo $cat["categorie"] ?>
                            <input type="checkbox" value="<?php echo $cat["categorie"] ?>"  class="product_check">
                            <span class="checknew"></span>
                            </label>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
            <div class="filtertxt productsectionallchild">Brand</div>
            <div class="brandoption productsectionallchild">
                <div class="brandline brnd">
                <?php  
                    foreach($brandimg as $img){
                ?>
                    <label class="imglabel">
                        <input type="checkbox" name="imgg" class="imgbrndinput" value="<?php echo $img["brand_name"] ?>">
                        <div><img src="<?php echo $img["brand_img"] ?>" alt="logo" height="90%"></div>
                    </label>

                <?php
                    }
                ?>
                </div>
                
            </div>
            <div class="filterbtn productsectionallchild">
                <div>
                    <button id="btn">APPLY FILTER</button>
                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="productarchivedivider"></div>
        <div class="productthemslf">
            <div class="productdflex">
                    <!-- loader -->
                    <div class="loader" style="display:flex; align-items:center; justify-content:center">
                        <img src="images/loader.gif" alt="loader" id="loader" style="display: none;">
                    </div>

                <div class="productcontainer" id="result">
                    <?php
                        foreach($products as $product){
                    ?>
                        
                    <div class="divo">
                        <a href="productpage.php?product_id=<?php echo $product['id']; ?>">
                            <div class="img">
                                <img src="<?php echo $product["product_images"] ?>" alt="err" width="80%">
                            </div>
                        </a>
                        <div><p class="categoriepro"><?php echo $product["categorie"] ?></p></div>
                        <div><p><?php echo $product["product_name"] ?> ...</p></div>
                        <div>
                            <div class="pricepro">
                                <p><?php echo $product["price"] ?>.00 DH</p> 
                                <form class="<?php echo $product['id']; ?>" action="" method="POST">
                                    <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>">
                                    <input type="hidden" name="product_images" value="<?php echo $product['product_images']; ?>">
                                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                                    <input type="submit" class="span" name="add_to_cart" value="add to cart">
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>

                </div>
            </div>
            <div class="pagination">
                <?php 
                for($i=1; $i<=$nbrpage; $i++){
                    ?>
                    <a href="?page=<?php echo $i ?>"><?php echo $i?></a>
                    <?php
                }
                ?>                
            </div>

        </div>
    </div>
    <!-- spacer -->
    <!-- <div class="thespacer"></div> -->
    <!-- footer -->
    <?php include "includes/footer.php" ?>
</body>
</html>