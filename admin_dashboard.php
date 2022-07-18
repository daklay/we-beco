<?php 
include "dbclass.php";
session_start();
if(!isset($_SESSION['login_id'])){
  header('location:admin_login.php');
}
if(isset($_GET['adminid'])){
  // unset($_SESSION['login_id']);
  session_destroy();
  header('location:admin_login.php');
}

#admins
$getadminobj = new admin_dashboard();
$getadmin = $getadminobj->getAdmins();

if(isset($_GET['action'])){
  if($_GET['action'] == "dell"){
    $delladminobj = new admin_dashboard();
    $delladmin = $delladminobj->dellAdmin($_GET['delete']);
    header('location:admin_dashboard.php');
  }
}
// ?157
$setadminsobj = new admin_dashboard();
if(isset($_POST['addbtn'])){
  $name = $_POST['name'];
  $login = $_POST['email'];
  $pass = $_POST['pass'];
  $role = $_POST['roleselect'];
  $setadmins = $setadminsobj->setAdmin($name, $login, $pass, $role);
  header('location:admin_dashboard.php');
}
#commandes
$getcommandesobj = new admin_dashboard();
$getcommande = $getcommandesobj->getCommande_admin();

$allproductsobj = new test();
$allproducts = $allproductsobj->getAll();

#add product

if(isset($_POST['addproduct'])){

  print_r($_FILES['myimage']);
  $imgname= $_FILES['myimage']['name'];
  $imgsize= $_FILES['myimage']['size'];
  $imgtmp= $_FILES['myimage']['tmp_name'];
  $imgerr= $_FILES['myimage']['error'];
  $unique_name = uniqid("img", true).'.png';
  $img_path = 'images/'.$unique_name;
  move_uploaded_file($imgtmp, $img_path);

  $setProductobj = new test();
  $setProduct = $setProductobj->setProduct($_POST['name'], $_POST['price'], $_POST['stock'], 'images/'.$unique_name);
  header("location:admin_dashboard.php");
}
if(isset($_POST['deleteproduct'])){
  $DelProductobj = new test();
  $DelProduct = $DelProductobj->DelProduct($_POST['product_id']);
  header("location:admin_dashboard.php");
}
if(isset($_POST['updateproduct'])){
  $Update_Productobj = new test();
  $Update_Product = $Update_Productobj->Update_Product($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['product_id']);
  header("location:admin_dashboard.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Admin dashboard</title>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <script src="https://kit.fontawesome.com/8579b38148.js" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="styles/sidebars.css" rel="stylesheet">
  </head>
<body>
  <main class="d-flex flex-nowrap">
    <div class="barr d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none justify-content-center" style=" width:100%;">
        <!-- <span class="fs-4">ORDISHOP</span> -->
        <!-- <img src="images/LOGOPNG-24.png" alt="err" width="100%" height="50px"> -->
        <img src="images/favicon.png" alt="err" height="70px">
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li onclick="sidebar('el1')">
          <a href="admin_dashboard.php#tab1" class="nav-link active el1" aria-current="page" >
            Admins
          </a>
        </li>
        <li onclick="sidebar('el2')">
          <a href="admin_dashboard.php#tab2" class="nav-link text-white el2" >
            Commandes
          </a>
        </li>
        <li onclick="sidebar('el3')">
          <a href="admin_dashboard.php#tab3" class="nav-link text-white el3" >
            Gestion des produits
          </a>
        </li>
      </ul>
      <div style="display:flex; align-items:center; "><i class="fa-solid fa-user"></i><a href="?adminid=<?php  echo $_SESSION['login_id'] ?>" onclick="return confirm('are you sure ?')" style="margin-bottom:0; padding:0 0 0 10px; color:white;"><?php  echo $_SESSION['login_name'] ?></a></div>

    </div>
    <div class="tables">
      <div class="tablediv tablediv1" id="tab1">  
        <table class="displayt userstable showt" >
          <thead>
              <tr>
                <th>admins</th>
                <th>login</th>
                <th>password</th>
                <th>role</th>
                <th>action</th>
              </tr>
          </thead>
          <tbody>
            <?php 
                foreach($getadmin as $v){
                  ?>
                  <tr>
                    <td><?php echo $v['id']?></td>
                    <td><?php echo $v['login']?></td>
                    <td><?php echo $v['pass']?></td>
                    <td><?php echo $v['role']?></td>
                    <td><a href="admin_dashboard.php?action=dell&delete=<?php echo $v['id']?>" onclick="return confirm('are you sure ?')">delete</a></td>
                </tr>
                  <?php
                }
            ?>
          </tbody>
        </table>
        <div class="productaction">
          <button onclick="showme('formusersuser')">add user</button>
        </div>
        <form action="" method="POST" class="formusers formusersuser">
          <input type="text" placeholder="user name" name="name">
          <input type="text" placeholder="user email" name="email">
          <input type="text" placeholder="user pass" name="pass">
          <select name="roleselect" id="role">
            <option value="admin">admin</option>
            <option value="owner">owner</option>
          </select>
          <input type="submit" name="addbtn" value="add user">
        </form>
      </div>
      <div class="tablediv tablediv2" id="tab2">  
        <table class="displayt userstable showt">
          <thead>
              <tr>
                <th>id</th>
                <th>nom</th>
                <th>tele</th>
                <th>date de commande</th>
                <th>status</th>
              </tr>
          </thead>
          <tbody>
          <!-- getcommande -->
          <?php 
                foreach($getcommande as $v){
                  ?>
                  <tr>
                    <td><?php echo $v['idc']?></td>
                    <td><?php echo $v['nom']?></td>
                    <td><?php echo $v['tele']?></td>
                    <td><?php echo $v['command_date']?></td>
                    <td>
                      <select name="statusupdate" class="statusupdate" id="status">
                        <option value="<?php echo $v['etape']?>"><?php echo $v['etape']?></option>
                        <option value="encour">encour</option>
                        <option value="livree">livree</option>
                      </select>
                    </td>
                    <td><a href="#tab2" id="updateCommande" class="updatebutton">update</a></td>
                  </tr>
                  <?php
                }
            ?>
          </tbody>
        </table>
      </div>
      <div class="tablediv tablediv3" id="tab3">
        <div class="containerr">
          <table class="displayt userstable showt">
            <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>price</th>
                  <th>stock</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                foreach($allproducts as $p){
                  ?>
                  <tr>
                    <td><?php echo $p['id']?></td>
                    <td><?php echo $p['product_name']?></td>
                    <td><?php echo $p['price']?></td>
                    <td><?php echo $p['stock']?></td>
                </tr>
                  <?php
                }
              ?>
                
            </tbody>
          </table>
          <div class="productaction">
            <button onclick="showme('formusers5')">add</button>
            <button onclick="showme('formusers1')">delete</button>
            <button onclick="showme('formusers2')">update</button>
          </div>
          <form action="" method="post" class="formusers formusers5" enctype="multipart/form-data">
            <!-- <input type="text" placeholder="product categorie" name="categorie"> -->
            <input type="text" placeholder="product name" name="name">
            <input type="text" placeholder="product price" name="price">
            <input type="text" placeholder="product stock" name="stock">
            <input type="file" name="myimage" accept=".png" placeholder="product file" name="file">
            <input type="submit" value="add" name="addproduct">
          </form>
          
          <form action="" method="post" class="formusers formusers1">
            <input type="text" placeholder="product id" name="product_id">
            <input type="submit" value="delete" name="deleteproduct"> 
          </form>
          <form action="" method="post" class="formusers formusers2">
            <input type="text" placeholder="product id" name="product_id">
            <input type="text" placeholder="product name" name="name">
            <input type="text" placeholder="product price" name="price">
            <input type="text" placeholder="product stock" name="stock">
            <input type="submit" value="update" name="updateproduct">
          </form>
        </div>
      </div>
    </div>
  </main>
  <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/sidebars.js"></script>
  <script src="js/admin_dashboard_ajx.js"></script>
</body>
</html>
