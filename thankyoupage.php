<?php
    session_start();
    $user_id = $_SESSION['$user_id'];
    if(!isset($_SESSION['$user_id'])){
        header('location:index.php');
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
    <link rel="stylesheet" href="styles/thankyoupage.css">
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <div class="thanks">
        <div class="thank_you_page"></div>
        <h2>Thank you your order successfully been placed</h2>
        <a href="#" target="_blank">home</a>
    </div>
</body>
</html>