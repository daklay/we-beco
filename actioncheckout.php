<?php
    include "dbclass.php";
    session_start();
    $user_id = $_SESSION['$user_id'];

    $commandeobj = new commande();
    $cartstatusobj = new cart();
    $cartproductsobj = new cart();
    $updateuserobj = new register_login();
    if(isset($_POST['action'])){
        $adresse = $_POST['adressev'];
        $tele = $_POST['telev'];
        $prenom = $_POST['prenomv']; 
        $totalprice = $_POST['totalv'];
        $codepostal = $_POST['codepv'];
        $country = $_POST['countryv'];

        $updateuser = $updateuserobj->updateUserCheckout($prenom, $codepostal, $adresse, $tele, $country, $user_id);
        // $cartproduct = $cartproductsobj->getCartProduct($user_id);
        $cartproduct = $cartproductsobj->getCartProductNOtCommender($user_id);
        foreach($cartproduct as $c){
            // $commande = $commandeobj->insertC($user_id, $totalprice, date("Y-m-d"), "encour");
            $commande = $commandeobj->insertC($c['product_id'],$user_id, $totalprice, date("Y-m-d"), "encour");
            $cartstatus = $cartstatusobj->updateStatus($c['product_id']);
        }
    }
    
?>