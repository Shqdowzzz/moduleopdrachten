<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="diatoets2.css">


</head>
<body>
    
 <header>
    <h1>Aanmeldformulier</h1>
    </header>

    <nav>
      <div class="buttons"><a href="diatoets2.php?page=huis">Home</a></div>
      <div><a href="diatoets2.php?page=over">Over</a></div>
      <div><a href="diatoets2.php?page=aanmelden">Aanmelden</a></div>
    </nav>



  <div id="container">

  <main id="main">
    <aside class="sidebar">Sidebar links</aside>
    <section class="content">

    <?php
    if ( $_GET['page'])
    {
      include "pages/". $_GET['page'].".php";
    }
?>

    


      <!-- <p>Hallo, dit is mijn website </p>  -->
    </section>
    <aside class="sidebar">Sidebar rechts</aside>

</main>

  <footer>
    @ 2025 Mijn website
  </footer>
  
  

</body>
</html>