<?php
    session_start();
    require "dbclass.php";
    // * register
    $registerobj = new register_login();

    if(isset($_POST['register_btn'])){
        $nom_register = $_POST['name_register'];
        $email_register = $_POST['email_register'];
        $pass_register = $_POST['password_register'];

        $check = $registerobj->login($email_register, $pass_register);

        if(count($check)>0){
            $_SESSION['alert'] = "user already exist";
            header('location:index.php');
        }
        else{
            $register = $registerobj->register($nom_register, $email_register, $pass_register);
            $_SESSION['alert'] = "user account created";
            header('location:index.php');
        }
    }
    // * login
    $loginobj = new register_login();

    if(isset($_POST['login_btn'])){
        $email_login = $_POST['email_login'];
        $password_login = $_POST['password_login'];
        // $currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

        $login = $loginobj->login($email_login, $password_login);
        if(count($login)>0){
            foreach($login as $v){
                $_SESSION['alert'] = "welcom ". $v['nom'];
                $_SESSION['$user_id'] = $v['id'];
            }
            $_SESSION['isconnected'] = true;
            
            header('location:index.php');
            // echo $currentPageUrl;
        }
        else{
            $_SESSION['alert'] = "incorrect password or email";
            header('location:index.php');
        }
    }
?>