<?php
    // include "dbclass.php";
    if(isset($_SESSION['$user_id'])){
        // $getcartforcart_obj = new cart();
        // $getcartforcart = $getcartforcart_obj->getCartProduct($_SESSION['$user_id']);
        // ! changed for stock
        // $getcartforcart = $getcartforcart_obj->getCartProductNOtCommender($_SESSION['$user_id']);
        $getcartstockobj = new cart();
        $getcartstock = $getcartstockobj->getstock($_SESSION['$user_id']);
        
    ?>
    <!-- cart -->
    <div id="cart" class="cardcontainerall">
        <div class="cardcontainer">
            <div class="cardheader">
                <div class="x">
                    <h2>Cart(<?php echo count($getcartstock) ?>)</h2>
                    <i class="fa-solid fa-x"></i>
                </div>
                <p>Free Shipping, 30 Days Return, 1 Year Warranty</p>
                <!-- <div class="divider"></div> -->
            </div>
            <div class="cardbody">
                <?php  
                    foreach($getcartstock as $cart){
                        ?>
                        <ul class="productslist">
                            <li>
                                <div class="start" id="full">
                                    <input type="hidden" name="cart_product_id" value="<?php echo $cart['product_id'];?>">
                                    <p><?php echo $cart['name'];?></p>
                                    <p class="price"><?php echo $cart['price'];?> DH</p>
                                </div>
                                <div class="center">
                                    <input type="hidden" name="stock" class="stock" value="<?php echo $cart['stock'] ?>">
                                    <div class="amount">
                                        <i class="fa-solid fa-plus"></i>
                                        <p class="displaycounter"><?php echo $cart['quantity'];?></p>
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <div class="delet">
                                        <input type="hidden" value="<?php echo $cart['product_id'] ?>">
                                        <!-- this.parentElement.parentElement.parentElement.parentElement.remove() -->
                                        <i class="fa-solid fa-trash" onclick="dell_getId(this)"></i>
                                    </div>
                                </div>
                                <div class="end">
                                    <img src="<?php echo $cart['image'];?>" alt="err" style="height: 100px;">
                                </div>
                            </li>
                        </ul>                        
                        <?php
                    }
                ?>
            </div>
            <div class="cardfooter">
                <div class="total">
                    <p>Subtotal</p>
                    <p class="cart_res">4,000.00 Dh</p>
                </div>
                <div class="btncheckoutcard">
                    <a href="checkout.php" id="btn_checkout">Procced To Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    else{
    ?>
    <!-- cart -->
    <div id="cart" class="cardcontainerall">
        <div class="cardcontainer">
            <div class="cardheader">
                <div class="x">
                    <h2>Cart(0)</h2>
                    <i class="fa-solid fa-x"></i>
                </div>
                <p>Free Shipping, 30 Days Return, 1 Year Warranty</p>
                <!-- <div class="divider"></div> -->
            </div>
            <div class="cardbody">
            </div>
            <div class="cardfooter">
                <div class="total">
                    <p>Subtotal</p>
                    <p>0 Dh</p>
                </div>
                <div class="btncheckoutcard">
                    <a href="#" >Procced To Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <?php 
    }
?>