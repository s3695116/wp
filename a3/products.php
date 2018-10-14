<?php
session_start();
require_once('tools.php');
top_module();
navigation_page_module();

$main = <<<"MAIN"
    <main>
      <article class="shoes" id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
          <div class="gallery">
            <a href="product.php?id=PRO001"><img src="../../media/1.PNG" alt="test" width="300" height="200"></a>
              <div class="desc">VALENTINO MENS SNEAKER</div>
              <a href='product.php?id=PRO001'>View Details</a>
          </div>
          
          <div class="gallery">
            <a href="product.php?id=PRO002"><img src="../../media/9595.PNG" alt="test" width="300" height="200"></a>
            <div class="desc">VALENTINO WMNS OPEN UNTLTD</div>
              <a href='product.php?id=PRO002'>View Details</a>
          </div>
          
              <div class="gallery">
                <a href="product.php?id=PRO003"><img src="../../media/6.PNG" alt="test" width="300" height="200"></a>
            <div class="desc">ALEXANDER MCQUEEN WMNS OVERSIZED RUNNER</div>
                <a href='product.php?id=PRO003'>View Details</a>
                </div>
                
                <div class="gallery">
                <a href="product.php?id=PRO004"><img src="../../media/8484.PNG" alt="test" width="300" height="200"></a>
            <div class="desc">BALENCIAGA HAT BALL LOGO</div>
                <a href='product.php?id=PRO004'>View Details</a>
        </div>
          
      </article>
    </main>
MAIN;
if(isset($_POST['continueShop']))
{
    unset($_SESSION['cart']);
}

if(isset($_POST['cancelOrder']))
{
    unset($_SESSION['cart']);
}

if(isset($_POST['cancelAdd']))
{
    $_SESSION["invalidId"] = false;
}
if($_SESSION["invalidId"] == true)
{
    InvalidIdWarning(); 
}
echo $main;
    footer_module();
$_SESSION["invalidId"] = false;
?>