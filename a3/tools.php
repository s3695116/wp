<?php
function top_module()
{
$html = <<<"OUTPUT"

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 3</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/newstyle.css">
    <script src='../wireframe.js'></script>
  </head>

 <body>
    <header>
      <div class="head"><img src="../../media/Logo.PNG"></div>
    </header>

OUTPUT;
   echo $html;
}

function navigation_page_module()
{
$nav = <<<"OUTPUT"
    <nav>
        <a class="normalLink" href="index.php">Home</a>
        <a class="normalLink" href="products.php">Products</a>
    </nav>
OUTPUT;
echo $nav;
}

function footer_module()
{
$footer = <<<"OUTPUT"


    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Tianchen Zhuang and Junhao Zhang, s3695116 and s3714056, A3-s3695116-s3714056</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      <div><a href="products.txt">Spreadsheet of products</a> <a href="orders.txt">Spreadsheet of recent orders</a></div>
    </footer>

  </body>
</html>
OUTPUT;
   echo $footer;
}

function product_file_read()
{
    $file = fopen("products.txt", "r");
    flock($file, LOCK_SH);
    $products = [];
    if(($head = fgetcsv($file,0,"\t")) !== false);
    {
        while($product = fgetcsv($file,0,"\t"))
        {
            for($i = 2;$i<count($product);$i++)
            {  
                $products[$product[0]][$product[1]][$head[$i]] = $product[$i];
            }
        }
    }
    flock($file, LOCK_UN);
    fclose($file);
    return $products;
}

function order_file_read()
{
    $file = fopen("orders.txt", "r");
}

function InvalidIdWarning()
{
    echo "<script>alert('Sorry,this item is unavailable now!');</script>";
}