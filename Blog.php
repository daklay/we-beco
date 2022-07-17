<?php
    session_start();
    include "dbclass.php";
    $getBlogsobj = new blog();
    $getBlogs = $getBlogsobj->getBlogs();
    foreach($getBlogs as $b){
        $image = $b['blog_img'];
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
    <link rel="stylesheet" href="styles/blog.css">

    <script src="js/cart.js" defer></script>
    <script src="js/run.js" defer></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/productsarchivepageajx2.js" defer></script>
    <script src="js/addtocartajx.js" defer></script>
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <style>
        .linecontainerblogcard .imagecoverb{
            background-image: url(<?php echo $image ?>);
        }
    </style>
    <!-- account popup -->
    <?php include "includes/acountpopup.php" ?>
    <!-- cart  -->
    <?php include "includes/cart.php" ?>
    <!-- header -->
    <?php include "includes/header.php" ?>
    
    <!-- blog header -->
    <div class="blogcontainerwrap">
        <div class="blogloker">
            <div class="blogbigtitle">
                <div class="blogt"><h1>blog</h1></div>
                <div class="blogline"></div>
            </div>
            <div class="thepaddingts">
                <div class="titleblog"><h1>Blog Lorem Ipsum we use this term.</h1></div>
                <div class="subtitleblog"><p>Actu web, réseaux sociaux, référencement, seo & webmarketing</p></div>
            </div>
            
        </div>
    </div>
    <!-- blog body -->
    <div class="containerblogbody">
        <div class="linecontainerblogcard">
            <?php 
            foreach($getBlogs as $c){
                ?>
                    <div class="card card1">
                        <div class="imagedivparent">
                            <div class="imagecoverb"></div>
                        </div>
                        <div class="blogdate">
                            <!-- <p>February 17,2009</p> -->
                            <p><?php echo $c['blogdate']?></p>
                        </div>
                        <div class="textcontent">
                            <h3><?php echo $c['title']?></h3>
                            <p><?php echo $c['subdescription']?></p>
                        </div>
                        <div class="btnseemore">
                            <a href="singlearticle.php?blogid=<?php echo $c['id'] ?>">SEE MORE</a>
                        </div>
                    </div>                
                <?php
            }
            ?>
        </div>
    </div>
    <!-- spacer -->
    <!-- <div class="thespacer"></div> -->
    <!-- footer -->
    <?php include "includes/footer.php" ?>
</body>
</html>