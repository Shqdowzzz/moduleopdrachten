<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="menu.css?v=2">
<header>
  <img src="/toetsfoto/sint.png" height="100" width="100"/>
    <div class= "header-text">
      <h1>Sinterklaas</h1>
</div>
    </header>

    <nav>
      <div class="buttons"><a href="http://localhost/moduleopdrachten/toets2/menu.php?page=huistoets">home</a></div>
      <div><a href="http://localhost/moduleopdrachten/toets2/menu.php?page=datumtoets">datum</a></div>
      <div><a href="http://localhost/moduleopdrachten/toets2/menu.php?page=opgavetoets">opgave</a></div>
    </nav>



  <div id="container">

  <main id="main">
    
    
    <section class="content">
        
        <?php
    if ( $_GET['page'])
    {
      include "pagestoets/". $_GET['page'].".php";
    }
?>


</section>
        

</main>

  <footer>
    Sinterklaasfeestje 2025
  </footer>
  

    
</body>
</html>