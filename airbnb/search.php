<?php  include("inc/header.inc.php")?>
<body>
  <?php include("inc/nav.inc.php")?>

  <?php 
$pdo = new PDO("mysql:host=localhost; dbname=registration", "root","",);
$annonces = $pdo->query('SELECT ville FROM annonces ORDER BY id DESC');
if(isset($_GET['search']) && !empty($_GET['search'])){
$search = htmlspecialchars($_GET['search']);
$annonces = $pdo->query("SELECT ville FROM annonces WHERE ville LIKE '%$search%' ORDER BY id_annonces DESC");
if($annonces->rowCount() == 0) {
var_dump('boucle entrée');
$annonces = $pdo->query("SELECT ville FROM annonces WHERE ville LIKE '%$search%'ORDER BY id_annonces DESC");
}
} 
?> 


</body>