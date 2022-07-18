<?php
    session_start();
    require "dbclass.php";
    $user_id = $_SESSION['$user_id'];
    // * check if user connected or not 
    if(!isset($user_id)){
        header('location:index.php');
    }
    if(isset($_GET['logout'])){
        unset($user_id);
        unset($_SESSION['isconnected']);
        session_destroy();
        header('location:index.php');
    }
    $reviewsobj = new comments();
    $reviews = $reviewsobj->getCommentsByUser_Id($user_id);
    if(isset($_GET['action'])){
        if($_GET['action'] == 'del'){
            $delproductobj = new comments();
            $delproduct = $delproductobj->delComment($_GET['id']);
            header('location:espace%20client.php');
        }
    }
    $commandeobj = new commande();
    $commandtable = $commandeobj->getCommande($user_id);
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
    <link rel="stylesheet" href="styles/espaceclient.css">
    <script src="js/espace.js" defer></script>
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <!-- header -->
    <?php include "includes/header.php" ?>
    <!-- //* get user info -->
    <?php
        // create obj
        $userobj = new register_login();
        $select_user = $userobj->getUser($user_id);
        foreach($select_user as $v){
            $nom = $v['nom'];
            $prenom = $v['prenom'];
            $email = $v['email'];
        }

    ?>
    <!-- espace client -->
    <div class="espaceclientwrapper">
        <div class="espaceclient">
            <div class="espacenav">
                <div class="navheader">
                    <div class="espaceprofile"></div>
                    <p class="username"><?php echo $nom ?></p>
                    <ul class="navlistespace">
                        <li onclick="filterSelection('reviews')" ><a href="#" class="btnact active">reviews</a> </li>
                        <li onclick="filterSelection('Orders')" ><a href="#" class="btnact">Orders</a> </li>
                        <li onclick="filterSelection('Downloads')" ><a href="#" class="btnact" >Downloads</a> </li>
                        <li onclick="filterSelection('Account')" ><a href="#" class="btnact">Account details</a>  </li>
                        <li onclick="filterSelection('Logout')" ><a href="#" class="btnact">Logout</a> </li>
                    </ul>
                </div>
                <!-- //!reviews -->
                <div class="espacecontent">
                    <div class="espacesubpages reviews" id="test">
                        <div class="reviewstabs">
                            <table>
                                <thead>
                                    <tr>
                                    <th>product</th>
                                    <th>Comment</th>
                                    <th>rating</th>
                                    <th>edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($reviews as $r){
                                        ?>
                                        <tr>
                                            <td><a href="productpage.php?product_id=<?php echo $r['product_id']?>"><?php echo $r['product_id'] ?></a></td>
                                            <td><?php echo $r['commentaire'] ?></td>
                                            <td>5</td>
                                            <td>
                                                <a href="espace%20client.php?action=del&id=<?php echo $r['id']?>" onclick="return confirm('are you sure ?')">delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="espacesubpages Orders"> 
                        <div class="Orderstabs">
                            <table>
                                <thead>
                                    <tr>
                                    <th>product</th>
                                    <th>date commande</th>
                                    <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- //!here -->
                                    <?php 
                                    foreach($commandtable as $t){
                                        ?>
                                            <tr>
                                                <td><a href="productpage.php?product_id=<?php echo $t['product_id']?>"><?php echo $t['product_name'] ?></a></td>
                                                <td><?php echo $t['command_date'] ?></td>
                                                <td><?php echo $t['etape'] ?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="espacesubpages Downloads"> 
                        <div class="downloadsection">
                            <a href="#"> telecharger votre devis </a>
                        </div>
                    </div>
                    <div class="espacesubpages Account">
                        <div class="userinfo">
                            <h2 class="profile">Profile</h2>
                            <form action="">
                                <div>
                                    <input type="text" name="name" placeholder="nouveau nom" value="<?php echo $nom ?>">
                                </div>
                                <div>
                                    <input type="text" name="prenom" placeholder="nouveau prenom" value="<?php echo $prenom ?>">
                                </div>
                                <div>
                                    <input type="text" name="email" placeholder="nouveau email" value="<?php echo $email ?>">
                                </div>
                                <div>
                                    <input type="text" name="nvpassword"  placeholder="nouveau password">
                                </div>
                                <div>
                                    <input type="text" name="oldpassword" placeholder="actual password">
                                </div>
                                <div>
                                    <input type="submit" value="update">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    <div class="espacesubpages Logout"> 
                        <div class="logoutdiv">
                            <a href="espace client.php?logout=<?php echo $user_id;?>" onclick="return confirm('are you sure')">
                                deconnecte <i class="fa-solid fa-right-from-bracket"></i>
                            </a>
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
                    <li><h2><a href="#">Presse</a></h2></li>
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
</body>
</html>