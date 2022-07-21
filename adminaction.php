<?php 
    include "dbclass.php";
    echo $_POST['selectvalajx'];
    echo $_POST['command_id'];

if(isset($_POST['action'])){
  
    $updatecommandeobj = new admin_dashboard();
    $updatecommande = $updatecommandeobj->updateCommande($_POST['selectvalajx'], $_POST['command_id']);
    // header('location:admin_dashboard.php#tab2');
    // echo "test";

}
?>