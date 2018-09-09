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
        <a class="login" href="login.php"Login>Login</a>
    </nav>

    <main>
      <article class="product" id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <div class="desc">
            <p>
            VALENTINO MENS SNEAKER<br><br>
            $1,310.00 AUD<br><br>
            VALENTINO GARAVANI STRETCH FABRIC.  SUEDE AND LEATHER UPPER.  RUTHENIUM-FINISH STUD.  LEATHER MIRROR DETAILS.  REFLECTIVE FABRIC INSERTS.  LIGHTWEIGHT RUBBER SOLE.  LEATHER HEEL PULL TAB.<br><br>
            MADE IN ITALY<br><br>
            </p>
            <input type="hidden" id="PRICE" name="price" value="1310.00"/>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
            <input type="hidden" id="ID" name="id" value="PRO001"/>
            <input type="button" id="minusButton" name="minusButton" onclick="MinusClicked()" value="-"/>
            <input type="number" id="quantity" name="qty" value="0"/>
            <input type="button" id="plusButton" name="plusButton" onclick="PlusClicked()" value="+"/><br>
            <select name="option" id="option">
                <option value="choose size">choose size</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
            </select><br>
            <input type="submit" id="submit" value="pay"/>
            </form>
          <script>
              var quantity = document.getElementById("quantity");
              var plusButton = document.getElementById("plusButton");
              var minusButton = document.getElementById("minusButton");
              var sumbit = document.getElementById("submit");
              function PlusClicked()
                  {
                      var n = quantity.value;
                      n++;
                      quantity.value = n;
                  }
              function MinusClicked()
                  {
                      var n = quantity.value;
                      if(n > 0)
                          {
                              n--;
                          }
                      quantity.value = n;
                  }
              submit.onclick=function(event)
              {
                  if(quantity.value == 0)
                      {
                          event.preventDefault();
                          alert("You must choose at least one item to pay!")
                      }
                  if(document.getElementById("option").value == "choose size")
                      {
                          event.preventDefault();
                          alert("You must choose a size!")
                      }
              }
          </script>
            </div>
        <div class="img"><img src="../../media/1.PNG" width="100%" height="100%"></div>
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
