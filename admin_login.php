<?php 
include "dbclass.php";
session_start();
$adminloginobj = new register_login();
if(isset($_POST['adminbtn'])){
    $adminlogin = $adminloginobj->getAdmins($_POST['login'], $_POST['pass']);
    if(count($adminlogin)>0){
        foreach($adminlogin as $a){
            $_SESSION['login_name'] = $a['name'];
            $_SESSION['login_id'] = $a['id'];
            header('location:admin_dashboard.php');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/template.css">
    <link rel="stylesheet" href="styles/amdin.css">
    <title>Document</title>
</head>
<body>
    <div class="newslettercontainer">
        <div class="newsletterall">
            <div class="leftside">
                <div class="text">
                    <h2>admin panel</h2>
                </div>
                <div class="formnewsletter">
                    <form action="" method="POST">
                        <input type="login" placeholder="Your login" name="login">
                        <input type="password" placeholder="Your password" name="pass">
                        <button name="adminbtn">login</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>