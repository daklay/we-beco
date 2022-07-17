<?php
    require 'dbclass.php';
    session_start();
    $userid = $_SESSION['$user_id'];


    if($_POST['action'] == "data"){
        $product_id = $_POST['product_id'];
        // if(isset($_POST['action'])){
        $productobj = new test();
        $select_product = $productobj->getProductById($product_id);
        foreach($select_product as $v){
            $product_name = $v['product_name'] ;
            $product_price = $v['price'];
            $product_images = $v['product_images'];
        }


        $cartobj = new cart();
        $selct_cart = $cartobj->cartcheckid($userid, $product_id);
        if(count($selct_cart)>0){
            // $message = "product already added to cart"; 
            $_SESSION['cartalert'] = "product already added to cart"; 
        }
        else{
            $insert_cart = $cartobj->addToCart($userid,$product_id,$product_name,$product_price,$product_images,1);
            // $message = "product added to cart"; 
            $_SESSION['cartalert'] = "product added to cart"; 
        }
        // header('location:Nos ordinateurs.php');






        $output = 
        '<div class="alertmessage">
            <div class="contentalert">
                <p>'.$_SESSION['cartalert'].'</p>
                <i class="fa-solid fa-xmark" id="closealert" onclick=this.parentElement.parentElement.remove()></i>
            </div>
        </div>';
        
        echo $output;
        // echo $_SESSION['cartalert'];
    }

    if($_POST['action'] == "dataqnty"){
        $product_qnty_arr = $_POST['product_qnty_arr'];
        $product_id = $_POST['product_id'];
        $cartsetobj = new cart();
        // $cartset = $cartsetobj->updateCartQnt(qnt,product_id);
        for($x=0; $x<count($product_id); $x++){
            $cartset = $cartsetobj->updateCartQnt($product_qnty_arr[$x], $product_id[$x]);
        }
            // print_r($product_id)   ;   
            // print_r($product_qnty_arr);
            // header('location:espace client.php');
    }
    if(isset($_POST['product_deleted_id_res'])){
        $deletedproduct = $_POST['product_deleted_id_res']; 
        // deleteProduct
        $deletbyidobj = new cart();
        for($x=0; $x<count($deletedproduct); $x++){
            $deletbyid = $deletbyidobj->deleteProduct($deletedproduct[$x]);
        }
        
    } 

    if($_POST['action'] == "productpage"){
        $product_id = $_POST['product_id'];

        $productobj = new test();
        $select_product = $productobj->getProductById($product_id);
        foreach($select_product as $v){
            $product_name = $v['product_name'] ;
            $product_price = $v['price'];
            $product_images = $v['product_images'];
        }


        $cartobj = new cart();
        $selct_cart = $cartobj->cartcheckid($userid, $product_id);
        if(count($selct_cart)>0){
            // $message = "product already added to cart"; 
            $_SESSION['cartalert'] = "product already added to cart"; 
        }
        else{
            $insert_cart = $cartobj->addToCart($userid,$product_id,$product_name,$product_price,$product_images,1);
            // $message = "product added to cart"; 
            $_SESSION['cartalert'] = "product added to cart"; 
        }
        // header('location:Nos ordinateurs.php');






        $output = 
        '<div class="alertmessage">
            <div class="contentalert">
                <p>'.$_SESSION['cartalert'].'</p>
                <i class="fa-solid fa-xmark" id="closealert" onclick=this.parentElement.parentElement.remove()></i>
            </div>
        </div>';
        
        echo $output;
        // echo $_SESSION['cartalert'];
    }
?>