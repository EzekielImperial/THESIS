<?php
// initialize shopping cart class
include 'cart.php';
$cart = new Cart;
// include database configuration file
include 'connector.php';



if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['product_ID'])){
        $productID = $_REQUEST['product_ID'];
        // get product details
        $query = $dbconn->query("SELECT * FROM products WHERE product_ID = '$productID'");
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['product_ID'],
            'name' => $row['productName'],
            'price' => $row['price'],
            'qty' => 1
        );

        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['productCode'])){
        $itemData = array(
            'rowid' => $_REQUEST['productCode'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){


        // insert order details into database

        $insertOrder = $dbconn->query("INSERT INTO orderlist (email, totalAmount) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."')");

        if($insertOrder){
            $orderNumber = $dbconn->insert_orderNumber;
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO orderdetails (orderNumber, productCode, quantity) VALUES ('".$orderNumber."', '".$item['productCode']."', '".$item['qty']."');";
				echo $orderNumber;
            }
            // insert order items into database
            $insertOrderItems = $dbconn->multi_query($sql);

            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderNumber");
            }else{
                header("Location: checkOut.php");
            }
        }else{
            header("Location: checkOut.php");
        }
    }else{
        header("Location: indexshop.php");
    }
}else{
    header("Location: indexshop.php");
}
?>
