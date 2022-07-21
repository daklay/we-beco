<?php

class db{
    public $host="localhost";
    public $user = "daklay";
    public $pass = "daklay123";
    public $dbName = "test";

    public function connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
// product
class test extends db{
    public function getCat(){
        $sql = "SELECT DISTINCT categorie FROM products";
        $stmt = $this->connect()->query($sql);
        $res= $stmt->fetchAll();
        return $res;
    }
    // public function setWhere(){
    //     $sql = "SELECT FROM products WHERE brand =?";
    // }
    public function getWhereProducts($categorie){
        $sql = "SELECT * FROM products WHERE categorie !='' AND categorie IN(?)"; //the problem is here in IN
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$categorie]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getWhereProducts2($brand){
        $sql = "SELECT * FROM products WHERE brand !='' AND brand IN(?)"; //the problem is here in IN
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$brand]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getWhereProductprice($price){
        $sql = "SELECT * FROM products WHERE price !='' AND price > ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$price]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getBrand(){
        $sql = "SELECT * FROM brand";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getAll(){
        $sql = "SELECT * FROM products";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        // remove fetch from here and use it in action for condition after $test->rowCount();
        return $res;
    }
    public function getProductById($id){
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    //you will decice what you really want by using this methode ['lorem'];
    public function getUsersStmt($brand, $price){
        $sql = 'SELECT * FROM products WHERE brand =? AND price =?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$brand, $price]);
        $names = $stmt->fetchAll();
        return $names;
    }
    // !! i changed this 
    public function setProduct($name, $price, $stock, $product_images){
        $sql = 'INSERT INTO products(product_name, price, stock, product_images) VALUES(?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $price, $stock, $product_images]);
    }
    public function DelProduct($id){
        $sql = 'DELETE FROM products WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    public function Update_Product($product_name, $price, $stock, $id){
        $sql = 'UPDATE products  set product_name = ?, price = ?, stock = ? WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_name, $price, $stock, $id]);
    }
    // public function getAllPagination($start, $nbrelemnt){
    //     $sql = 'SELECT * FROM products limit ?,?';
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$start, $nbrelemnt]);
    //     $res = $stmt->fetchAll();
    //     return $res;
    // }
    public function getAllPagination($debut){
        $stmt = $this->connect()->prepare("SELECT * FROM products limit $debut, 12");
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
}
class register_login extends db{
    public function register($nom, $email, $pass){
        $sql = "INSERT INTO users(nom,email,password) VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt = $stmt->execute([$nom, $email, $pass]);
    }
    public function updateUserCheckout($prenom, $codepostal, $adressLiv, $tele, $country, $user_id){
        $sql = "UPDATE users SET prenom = ? , codepostal= ?, adresseLiv = ?, tele = ?, contry=?  WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$prenom, $codepostal, $adressLiv, $tele, $country, $user_id]);
    }
    public function login($email, $password){
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    // public function UpdateProfile($id, $nom, $prenom, $email, $newpass){

    // }
    public function getAdmins($login, $pass){
        $sql = "SELECT * FROM admins WHERE login = ? AND pass = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$login, $pass]);
        $res = $stmt->fetchAll();
        return $res;
    }
}
class cart extends db{
    public function getCartProduct($user_id){
        $sql = "SELECT * FROM cart WHERE user_id = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getCartProductNOtCommender($user_id){
        $sql = "SELECT * FROM cart WHERE user_id = ? AND status IS NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getstock($user_id){
        $sql = "SELECT * FROM cart INNER JOIN products on cart.product_id = products.id WHERE cart.user_id =? AND status IS NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function cartcheckid($user_id, $product_id){
        $sql = "SELECT * FROM cart WHERE user_id = ? AND product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $product_id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function addToCart($userid,$product_id, $name, $price, $image, $quantity){
        $sql = "INSERT INTO cart(user_id,product_id,name,price,image,quantity) VALUES(?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userid, $product_id, $name, $price, $image, $quantity]);
    }
    public function updateCartQnt($qnt, $product_id){
        $sql = "UPDATE cart SET quantity = ? WHERE product_id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$qnt, $product_id]);
    }
    public function updateStatus($product_id){
        $sql = "UPDATE cart SET status = 'commander' WHERE product_id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);
    }
    public function deleteProduct($product_id){
        $sql = "DELETE FROM cart WHERE product_id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);
    }
}
class comments extends db{
    public function insertComment($comment, $user_id, $product_id){
        $sql = "INSERT INTO reviews(commentaire,user_id,product_id,date) VALUES(?,?,?,DATE(NOW()))";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$comment, $user_id, $product_id]);
    }
    public function delComment($product_id){
        $sql = "DELETE FROM reviews WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);
    }
    public function getCommentsAll(){
        $sql = "SELECT * FROM reviews";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getCommentsByUserProduct_Id($user_id, $product_id){
        $sql = "SELECT * FROM reviews WHERE user_id = ? and product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $product_id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getCommentsByProduct_Id($product_id){
        $sql = "SELECT * FROM reviews INNER JOIN users on reviews.user_id = users.id WHERE product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getCommentsByUser_Id($user_id){
        $sql = "SELECT * FROM reviews WHERE user_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $res = $stmt->fetchAll();
        return $res;
    }
}
class commande extends db{
    // public function insertC($userId, $prix, $commanddate, $etap){
    //     $sql = "INSERT INTO commande(users_id, prix, command_date, etape) VALUES(?,?,?,?)";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$userId, $prix, $commanddate, $etap]);
    // }
    public function insertC($product_id,$userId, $prix, $commanddate, $etap){
        $sql = "INSERT INTO commande(product_id,user_id, prix, command_date, etape) VALUES(?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id, $userId, $prix, $commanddate, $etap]);
    }
    public function getCommande($userId){
        $sql = "SELECT * FROM commande INNER JOIN products on commande.product_id = products.id WHERE user_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userId]);
        $res = $stmt->fetchAll();
        return $res;
    }
}
class admin_dashboard extends db{
    #admins
    public function getAdmins(){
        $sql = "SELECT * FROM admins";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function setAdmin($name, $login, $pass, $role){
        $sql = "INSERT INTO admins(name, login, pass, role) VALUES(?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $login, $pass, $role]);
    }
    public function dellAdmin($id){
        $sql = "DELETE FROM admins WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    #commandes
    public function getCommande_admin(){
        $sql = "SELECT *,commande.id as idc FROM commande INNER JOIN users on users.id = commande.user_id";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function updateCommande($status, $id){
        $sql = "UPDATE commande SET etape = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$status, $id]);
    }
}
class blog extends db{
    public function getBlogs(){
        $sql = "SELECT * FROM blog";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
    public function getBlogsById($id){
        $sql = "SELECT * FROM blog WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetchAll();
        return $res;
    }
}
class packs extends db{
    public function getPacks(){
        $sql = "SELECT * FROM packs";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
}

class suppliers extends db{
    public function getSuppliers(){
        $sql = "SELECT * FROM supplier";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
}
class press extends db{
    public function getPress(){
        $sql = "SELECT * FROM press";
        $stmt = $this->connect()->query($sql);
        $res = $stmt->fetchAll();
        return $res;
    }
}



