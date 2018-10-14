<?php
session_start();
require_once 'tools.php';

$customerName = $_SESSION["customer"]['customer_name'];
$customerMobile = $_SESSION["customer"]['customer_mobile'];
$customerEmail = $_SESSION["customer"]['customer_email'];
$billingAddress = $_SESSION["customer"]['customer_address'];
$cardNumber = $_SESSION["customer"]['customer_credit'];

echo'<h3>THANK YOU FOR YOUR ORDER</h3>';

echo'<main style="background-color:#FFFFFF">';
echo'<main>';
echo'<h4>Sales Receipt</h4>';
echo"<h4>Customer name: $customerName </h4>";
echo"<h4>Customer mobile: $customerMobile </h4>";
echo"<h4>Customer email: $customerEmail </h4>";
echo"<h4>Billing address:$billingAddress </h4>";
echo"<h4>Credit card number: $cardNumber </h4>";
echo"</main>";

$oid = $_SESSION['cart']['id'];
$qty = $_SESSION['cart']['oid'];
$id = $_SESSION['cart']['qty'];
$name = $_SESSION['cart']['name'];
$price = $_SESSION['cart']['price'];
$total = number_format(($qty * $price),2);

echo"<h4>Item id: $id </h4>";
echo"<h4>Option: $oid </h4>";
echo"<h4>Item name: $name </h4>";
echo"<h4>Single price: $price </h4>";
echo"<h4>Quantity: $qty</h4>";
echo"<h4>Total Price: $total </h4>";

$shop = <<<"SHOP"
<div class="cart-button">
               <form class="" action="products.php" method="post">
                <div class="cart-button">
                <input type="hidden" name="continueShop" value="">
               <button type="submit" name="order" class="btn-cart">Continue Shopping</button>
              </div>
              </form>
</div>
SHOP;
echo $shop;

$date = date("Y-m-d");
$output = array($date, $customerName, $customerEmail, $customerMobile, $billingAddress, $id, $name, $oid, $qty, $price, $total);


$file = fopen('orders.txt','a');
flock($file, LOCK_EX);
fputcsv($file, $output, "\t");
flock($file, LOCK_UN);
fclose($file);


footer_module();
?>
