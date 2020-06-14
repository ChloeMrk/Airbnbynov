<?php include("inc/header.inc.php")?>
<body>
  
<?php include("inc/nav.inc.php")?>
  
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

<?php 

  $pdo = new PDO("mysql:host=localhost; dbname=registration", "root","",);
  $result = $pdo->query("SELECT * FROM annonces WHERE delection_flag = 0");
  while($annonce = $result -> fetch(PDO::FETCH_OBJ)){?>

<section class="product">
  <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $annonce->ville?></h5>
        <?php echo '<img src="'.$annonce->cheminImg.'" alt=""/>';?>

      </div>
    </div>


  <?php }?>

</section>
 



    
  </body>
</html>

