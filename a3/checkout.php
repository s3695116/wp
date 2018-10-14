<?php
session_start();
require_once 'tools.php';
top_module();
 if (isset($_POST['submit-file'])) {

      $errors = array();

   $today_date=date('Y/m/d');
   $exp_date=$_POST['Expiry'];


   $td=strtotime($today_date); //converting
   $exp=strtotime($exp_date);
   $limit = strtotime("+28 day", $td);
   // echo $td;
   // echo " + ";
   // echo $limit;

   if($limit >= $exp){
     $errors['exp1'] = "Credit card can not expire 28 days in the future";
   }





      if(count($errors) == 0){
        header("Location: receipt.php");

        $count = count($_SESSION["customer"]);
        $item_array = array(
          'customer_name'			=>	$_POST["fullName"],
          'customer_mobile'		=>	$_POST["mobile"],
          'customer_email'		=>	$_POST["email"],
          'customer_address'		=>	$_POST["address"],
          'customer_credit'		=>	$_POST["credit"]
        );
        $_SESSION["customer"] = $item_array;

       exit();
      }
 }
 
$main = <<<"MAIN"
<main>
 <div id="checkoutBox" style="min-height:700px;">
     <h3 class="game-intro-title" style="text-align:center;">Enter Your detail to confirm the order</h3>

    <div class="form-input">
      <form class="" action="checkout.php?action=submit&amp;id=0" method="post">
         <label for="fullName" style="font-size: 16px;">Your full name:</label>
         <br>
        <input class="checkout" type="text" name="fullName" class="text-input" value="" required=""
        pattern="[A-Za-z '-\.]+"
        title="Name can only contain alphabetic characters along with the space ' - . punctuation characters."
placeholder="Jason"
        >
<!-- php hints should below here -->
    <br>
        <label for="email" style="font-size: 16px;">Your E-mail address:</label>
        <br>
        <input class="checkout" type="textarea" name="email" class="text-input" value="" required=""
               placeholder="94279247297@gamil.com">
          
          
        <br>
    <p></p>
        <label for="mobile" style="font-size: 16px;">Your mobile number:</label>
        <br>
        <input class="checkout" type="text" name="mobile" class="text-input" value="" required="" pattern="(\(04\)|04|\+614)([ ]?\d){8}" title="Phone number must be an Australian mobile"
               placeholder="0431123456">
        <br>
        <label for="address" style="font-size: 16px;">Bill address:</label>
        <br>
        <input class="checkout" type="text" name="address" class="text-input" value="" required=""
               placeholder="123 bourke street">

        <br>
        <label for="credit" style="font-size: 16px;">Your credit card number:</label>        <div id="cc-tip" style="float:right;">

        </div>
        <br>
        <input class="checkout" type="text" name="credit" class="text-input" id="credit" value="" required="" minlength="12" maxlength="19" oninput="creditCheck()" placeholder="4123 4567 8901 2345">
        
        <script src='credit-function.js'></script>
        
        <br>
        <label for="Expiry" style="font-size: 16px;">Expiry date:</label>
        <br>
        <input class="checkout" type="date" name="Expiry" class="text-input" value="" style="width:70%;" required="">
        
MAIN;
echo $main;
if(isset($errors['exp1'])) echo $errors['exp1'];

$main_left = <<<"MAIN"
<br>
         <button type="submit" name="submit-file" class="btn-cart" >confirm</button>

      </form>
    </div>


   </div>

</main>
MAIN;
echo $main_left;
footer_module();

   ?>
