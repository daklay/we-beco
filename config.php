<?php

    
try{

    $dsn = 'mysql:host=localhost;dbname=test';
    $pdo = new PDO($dsn, "daklay", "daklay123");
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(Exception $e){
    die("err :" .$e->getMessage());
}

?>