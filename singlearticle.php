<?php 
include "dbclass.php";
// getBlogsById
if(isset($_GET['blogid'])){
    $blog_id = $_GET['blogid'];
    $getBlogsByIdobj = new blog();
    $getBlogsById = $getBlogsByIdobj->getBlogsById($blog_id);
    foreach($getBlogsById as $b){
        $title = $b['title'];
        $subdescription = $b['subdescription'];
        $blog_img = $b['blog_img'];
    }
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
    <link rel="stylesheet" href="styles/singlearticle.css">

    <script src="js/cart.js" defer></script>
    <script src="js/run.js" defer></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/productsarchivepageajx2.js" defer></script>
    <script src="js/addtocartajx.js" defer></script>
    <title>OrdiShop - Maroc</title>
</head>
<body>
    <!-- account popup -->
    <?php include "includes/acountpopup.php" ?>
    <!-- cart  -->
    <?php include "includes/cart.php" ?>
    <!-- header -->
    <?php include "includes/header.php" ?>
    <!-- blog body -->
    <div class="blogcontainerbody">
        <div class="wrapcontainerheaderblog">
            <div class="bloghead">
                <h1><?php echo $title ?></h1>
                <p><?php echo $subdescription ?></p>
            </div>
            <div class="profiledisplay">
                <div class="imagepdp"></div>
                <div class="proftext">
                    <h4>Mossaab Amimar</h4>
                    <p>slf lorem ipsum its something</p>
                </div>
            </div>
            <div class="blogcontainertext">
                <div>
                    <p>W</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque harum fugit, ut tempora blanditiis ad magni, libero sapiente dolores nesciunt unde repudiandae officiis corporis ea! Officia accusamus, dolorem quis rerum voluptate ipsam nobis accusantium provident nemo veritatis fugiat libero architecto asperiores quia fugit culpa nam aperiam quae, iusto commodi cum! Vitae sed quos quisquam omnis reiciendis! Sunt voluptatibus vitae consectetur. Repudiandae commodi aliquam nulla. Cumque vero nam eos ab. Modi, animi saepe dolore.</p>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque harum fugit, ut tempora blanditiis ad magni, libero sapiente dolores nesciunt unde repudiandae officiis corporis ea! Officia accusamus, dolorem quis rerum voluptate ipsam nobis accusantium provident nemo veritatis fugiat libero architecto asperiores quia fugit culpa nam aperiam quae, iusto commodi cum!.</p>
                <p class="blogheading"><span>1.</span>First Heading</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque harum fugit, ut tempora blanditiis ad magni, libero sapiente dolores nesciunt unde repudiandae officiis corporis ea! Officia accusamus, dolorem quis rerum voluptate ipsam nobis accusantium provident nemo veritatis fugiat libero architecto asperiores quia fugit culpa nam aperiam quae, iusto commodi cum! Vitae sed quos quisquam omnis reiciendis! Sunt voluptatibus vitae consectetur. Repudiandae commodi aliquam nulla. Cumque vero nam eos ab. Modi, animi saepe dolore, enim dicta officiis illum repellendus at, laudantium assumenda laborum earum! Libero perspiciatis praesentium suscipit, eligendi eaque ullam nihil accusantium.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque harum fugit, ut tempora blanditiis ad magni, libero sapiente dolores nesciunt unde repudiandae officiis corporis ea! Officia accusamus, dolorem quis rerum voluptate ipsam nobis accusantium provident nemo veritatis fugiat libero architecto asperiores quia fugit culpa nam aperiam quae.</p>
            </div>
            <div class="blogimagesection"><div class="actualimg"></div></div>
            <div class="blogcontainertext2">
                <p class="blogheading"><span>2.</span>Second Heading</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque harum fugit, ut tempora blanditiis ad magni, libero sapiente dolores nesciunt unde repudiandae officiis corporis ea! Officia accusamus, dolorem quis rerum voluptate ipsam nobis accusantium provident nemo veritatis fugiat libero architecto asperiores quia fugit culpa nam aperiam quae, iusto commodi cum!.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque harum fugit, ut tempora blanditiis ad magni, libero sapiente dolores nesciunt unde repudiandae officiis corporis ea! Officia accusamus, dolorem quis rerum voluptate ipsam nobis accusantium provident nemo veritatis fugiat libero architecto asperiores quia fugit culpa nam aperiam quae, iusto commodi cum! Vitae sed quos quisquam omnis reiciendis! Sunt voluptatibus vitae consectetur. Repudiandae commodi aliquam nulla. Cumque vero nam eos ab. Modi, animi saepe dolore, enim dicta officiis illum repellendus at, laudantium assumenda laborum earum! Libero perspiciatis praesentium suscipit, eligendi eaque ullam nihil accusantium.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque harum fugit, ut tempora blanditiis ad magni, libero sapiente dolores nesciunt unde repudiandae officiis corporis ea! Officia accusamus, dolorem quis rerum voluptate ipsam nobis accusantium provident nemo veritatis fugiat libero architecto asperiores quia fugit culpa nam aperiam quae.</p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include "includes/footer.php" ?>
</body>
</html>