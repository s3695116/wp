<?php
session_start();
require_once('tools.php');
top_module();

$products = product_file_read();

$cartProduct = [];

$oid = "";
$qty = "";
$id = "";

$name = '';
$price = '';
$imagePath = '';
if(isset($_POST['oid']))
{
    $_SESSION['cart']['id'] =  $_POST['oid'];
    $_SESSION['cart']['oid'] =  $_POST['qty'];
    $_SESSION['cart']['qty'] = $_POST['id'];
    $oid = $_SESSION['cart']['id'];
    $qty = $_SESSION['cart']['oid'];
    $id = $_SESSION['cart']['qty'];
    foreach($products as $ID => $details)
    {
        foreach($details as $OID => $detail)
        {
            if((($id == $ID) && ($oid == $OID)))
            {
                $_SESSION['cart']['name'] = $detail['Name'];;
                $_SESSION['cart']['price'] = $detail['Price'];
                $_SESSION['cart']['imagePath'] = $detail['ImagePath'];
                $name = $_SESSION['cart']['name'];
                $price = $_SESSION['cart']['price'];
                $imagePath = $_SESSION['cart']['imagePath'];
            }
        }
    }
}
$total = number_format(($qty * $price),2);

$main = <<<"MAIN"
<nav>
<h3 class="typical-name-1">Your shopping cart </h3>
    </nav>

<main>
<div id="cartBox" class="cartBox">
MAIN;
echo $main;
echo '<table><tbody><tr>';
echo "<th width=\"10%\"><img width=\"150\" height=\"90\" src=\"$imagePath\"></th>";	
echo "<th width=\"10%\">$id</th>";
echo "<th width=\"15%\">$name</th>";
echo "<th width=\"10%\">$oid</th>";
echo "<th width=\"10%\">$qty</th>";
echo "<th width=\"15%\">$$price</th>";
echo "<th width=\"15%\">$$total</th>";
echo '</tr></tbody></table>';


$main_left = <<<"MAIN"
            <hr>
            
            <form class="" action="checkout.php" method="post">
                <div class="cart-button">
                <input type="hidden" name="submitOrder" value="">
               <button type="submit" name="order" class="btn-cart">submit order</button>
              </div>
              </form>
              
              <form class="" action="products.php" method="post">
              <div class="cart-button">
              <input type="hidden" name="cancelOrder" value="cancel">
               <button type="submit" name="cancel" class="btn-cart">cancel order</button>
              </div>
              </div>
              </form>
MAIN;
echo $main_left;


    footer_module();
?>