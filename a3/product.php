<?php
require_once("tools.php");
session_start();

top_module();

$id = '';
$oid = '';
$name = '';
$description = '';
$option = [];
$o = 0;
$price = '';
$imagePath = '';
$invalidID = true;

$products = product_file_read();

$id = $_GET['id'];
// check if id is empty or set
if ((isset($id) && (!empty($id)))){
    //check each id
    foreach($products as $ID => $details)
    {
        //check each oid 
        foreach($details as $OID => $detail)
        {
            if($id == $ID)
            {
                $name = $detail['Name'];
                $description = $detail['Description'];
                $option[$o] = $detail['Option'];
                $o++;
                $price = $detail['Price'];
                $imagePath = $detail['ImagePath'];
            }
        }
    }
}
if($name == '')
{
    header("location:products.php");
    $_SESSION["invalidId"] = true;
}

$main_top = <<<"MAIN"


<main>
    <nav>
    </nav>
    
      <article class="product" id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <div class="desc">
            <p>
            $name<br><br>
            Price: $$price AUD<br><br>
            $description<br><br>
            </p>
MAIN;
echo $main_top;

echo "<p>Total Price : $<span id = \"total_price\">0.00</span> AUD</p>";
echo "<input type=\"hidden\" id=\"PRICE\" name=\"price\" value=\"$price\"/>";
echo '<form action="cart.php" method="post">';
echo "<input type=\"hidden\" id=\"ID\" name=\"id\" value=\"$id\"/>";
echo '<input type="button" id="minusButton" name="minusButton" onclick="MinusClicked()" value="-"/>';

$quantityBox = <<<"MAIN"
<input type="number" id="quantity" name="qty" value="0" min="0" onchange="UpdatePrice()" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}" onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}" required/>
MAIN;

echo $quantityBox;
echo "<input type=\"button\" id=\"plusButton\" name=\"plusButton\" onclick=\"PlusClicked()\" value=\"+\"/><br>";
echo "<select name=\"oid\" id=\"oid\">";
echo "<option value=\"choose size\">choose size</option>";
foreach($option as $opt)
{
    echo "<option value=\"$opt\">$opt</option>";
}
echo "</select><br>";
echo "<input type=\"submit\" id=\"submit\" value=\"add to the cart\"/>";
echo "</form>";

echo '<form action="products.php" method="post">';
echo '<input type="hidden" name="cancelAdd" value="this is the input that cancels product">';
echo '<button type="submit" id="cancel-button">Cancel</button>';
echo '</form>';
                
$main_bot = <<<"MAIN"
            <script src='./product-function.js'></script>
            </div>
        <div class="img"><img src="$imagePath" width="100%" height="100%"></div>
      </article>
    </main>
MAIN;
echo $main_bot;



footer_module();
?>

