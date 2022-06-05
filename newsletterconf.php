<?php 
    $host = "localhost";
    $username = "daklay";
    $pass = "daklay";

    try{
        $conn = new PDO("mysql:host=$host;dbname=test", $username, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "connection failed: ". $e->getMessage();
    }


    if(isset($_POST['save_n'])){
        // print_r($_POST);
        $sql = "INSERT INTO newsletter(email) VALUES('".$_POST['nemail']."')";
        $conn->query($sql);
    }
?>