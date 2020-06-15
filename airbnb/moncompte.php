<?php include("inc/header.inc.php");?>

<link rel="stylesheet" href="assets/css/moncompte.css" />

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
      <li><a href="annoncesform.php">Héberger des voyageurs</a></li>
      <li><a href="#">Créer une expérience</a></li>
      <li><a href="#">Aide</a></li>
      <li><a href="moncompte.php">Mon compte</a></li>
    </ul>
</div>

    <?php  $pdo = new PDO("mysql:host=localhost; dbname=registration", "root","",); 
    
    $requeteSQL = "SELECT type_logement, nbr_voyageur, prix, annonces.ville, adresse, annonces.cheminImg, description FROM annonces, users where annonces.id_users = users.id_users and users.id_users = '4'";
    $result= $pdo->query($requeteSQL);
   
   
    ?>


   
    <?php while($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>

    
      <div class="card">
      <div class="card-body">
     
     
       <h4><?php echo htmlspecialchars($row['ville']); ?></h4>
       <h5><?php echo htmlspecialchars($row['type_logement']); ?></h5>
       <h6><?php echo htmlspecialchars($row['nbr_voyageur']); ?> /voyageur</h6>
       <h6><?php echo htmlspecialchars($row['prix']); ?> €/nuit</H6>
       <h5><?php echo htmlspecialchars($row['adresse']); ?></h5>
       <p><?php echo htmlspecialchars($row['description']);?></p>
       <?php echo '<img src="'.($row['cheminImg']).'" alt=""/>'; ?>
       <a href="#" class="button" name = "modifier">Modifier</a>
       <button class="btn btn-primary" name = Supprimer> Supprimer</button>
     
     </div>
     </div>

    
     
     <?php endwhile; ?>
   

</body>