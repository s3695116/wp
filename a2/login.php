<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
      <link href="css/style.css">
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
      <article class="login" id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
        <label for="Eaddress">E-mail Address</label>
        <input class="login" type="email" id="Eaddress" name="email" placeholder="E-mail Address..." required>
        <label for="Password">Password</label>
        <input class="login" type="password" id="Password" name="password" placeholder="Password...">
        <input class="login" type="submit" value="Submit">
        </form>
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
