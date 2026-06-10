<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css?v=2">
</head>
<body>
   <header>
    <h1>vuurwerkshop</h1>
    </header>

    <nav>
      <div class="buttons"><a href="index.php?page=huis">Home</a></div>
      <div><a href="index.php?page=select">Select</a></div>
      <div><a href="index.php?page=insert">Insert-firework</a></div>
    </nav>

  <div id="container">

  <main id="main">
    <section class="content">

    <?php
    if ( $_GET['page'])
    {
      include "pages/". $_GET['page'].".php";
    }
?>


      <!-- <p>Hallo, dit is mijn website </p>  -->
    </section>

</main>

 



 <footer>
    vuurwerk @2025
  </footer>

</body>
</html>