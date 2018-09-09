<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>
    <header>
      <div class="head"><img src="../../media/Logo.PNG"></div>
    </header>

    <nav>
        <a class="normalLink" href="index.php">Home</a>
        <a class="normalLink" href="shoes.php">Shoes</a>
        <a class="normalLink" href="apparel.php">Apparel</a>
        <a class="login" href="login.php">Login</a>
    </nav>

    <main>
      <article class="shoes" id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
          <div class="gallery">
            <a href="product.php"><img src="../../media/1.PNG" alt="test" width="300" height="200"></a>
            <div class="desc">VALENTINO MENS SNEAKER</div>
          </div>
          
          <div class="gallery">
            <a href="product1.php"><img src="../../media/9595.PNG" alt="test" width="300" height="200"></a>
            <div class="desc">VALENTINO WMNS OPEN UNTLTD</div>
          </div>
          
              <div class="gallery">
                <a href="product2.php"><img src="../../media/6.PNG" alt="test" width="300" height="200"></a>
            <div class="desc">ALEXANDER MCQUEEN WMNS OVERSIZED RUNNER</div>
        </div>
          
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Tianchen Zhuang and Junhao Zhang, s3695116 and s3714056, A2-s3695116-s3714056</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
