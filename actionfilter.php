<?php
    require 'config.php';

    if(isset($_POST['action'])){

        $sql = "SELECT * FROM products WHERE categorie !=''";
        if(isset($_POST['categories'])){
            $categories = implode("','", $_POST['categories']);
            $sql .= "AND categorie IN('".$categories."')";
        }

        if(isset($_POST['brand'])){
            $brand = implode("','", $_POST['brand']);
            $sql .= "AND brand IN('".$brand."')";
        }


        if(isset($_POST['price'])){
            $price = implode("','", $_POST['price']);
            $sql .= "AND price <= ".$price."";
        }
        $res = $pdo->query($sql);

        $output = "";
        foreach($res as $product){
            $output.= '
            <div class="divo">
            <div class="img">
                <img src="'. $product["product_images"] .'" alt="err" width="80%">
            </div>
            <div><p class="categoriepro">'. $product["categorie"] .'</p></div>
            <div><p>'. $product["product_name"] .' ...</p></div>
            <div>
                <div class="pricepro">
                    <p>'. $product["price"] .'.00 DH</p> 
                    <form action="" method="POST">
                        <input type="hidden" name="product_name" value="'. $product["product_name"] .'">
                        <input type="hidden" name="product_images" value="'. $product["product_images"] .'">
                        <input type="hidden" name="product_price" value="'. $product["price"] .'">
                        <input type="submit" class="span" name="add_to_cart" value="add to cart">
                    </form>
                </div>
            </div>
            </div>
            ';
        }
        echo $output;
        // echo $sql;
    }
?>