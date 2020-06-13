<?php include("inc/header.inc.php")?>
  <body>
  <div class="top-nav clearfix">
      <a href="index.php">
        <img src="assets/img/airbnb.svg" alt="airbnb" class="logo" />
      </a>
      <div id="nav-search-wrapper">
      <form method="GET" action="index.php">
        <input type="text" name="nav-search" id="nav-search" placeholder="Search">
      </form>
    </div>

    <ul>
      <li><a href="annonces.php">Héberger des voyageurs</a></li>
      <li><a href="#">Créer une expérience</a></li>
      <li><a href="#">Aide</a></li>
      <li><a href="registration/connexion.php">Mon compte</a></li>
    </ul>

    
   
    <div class="wrapper">

<div class="carousel">

  <button type="button" id="carousel-arrow-prev" class="carousel-arrow carousel-arrow-prev" arial-label="Image précédente"></button>
  <button type="button" id="carousel-arrow-next" class="carousel-arrow carousel-arrow-next" arial-label="Image suivante"></button>

  <img id="carousel-0" class="carousel-img carousel-img-displayed" src="assets/img/img1.jpeg" alt="Winter" />
  <img id="carousel-1" class="carousel-img carousel-img-noDisplay" src="assets/img/img2.jpeg" alt="Sea" />
  <img id="carousel-2" class="carousel-img carousel-img-noDisplay" src="assets/img/img3.jpeg" alt="Night" />
  <img id="carousel-3" class="carousel-img carousel-img-noDisplay" src="assets/img/img4.jpeg" alt="Moutain" />
  <img id="carousel-4" class="carousel-img carousel-img-noDisplay" src="assets/img/img5.jpeg" alt="Desert" />

</div>

</div>
    
  </body>
</html>

