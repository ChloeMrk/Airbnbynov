<?php  include("inc/header.inc.php")?>
<body>
  <?php include("inc/nav.inc.php")?>

  
<?php
try{
$bdd = new PDO("mysql:host=localhost;dbname=registration", 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
echo $e->getMessage();
}
if(isset($_GET['user'])){
$search = (String) trim($_GET['search']);
$req = $bdd->prepare("SELECT * FROM annonces WHERE ville LIKE '%$search%' LIMIT 10");
$s = $req->fetch(PDO::FETCH_OBJ);
foreach($req as $r){
?>
<div style="margin-top: 20px 0; border-bottom: 2px solid #ccc"><?php $r['title'] . " " . $r['price'] ?></div>
<?php
}
}
?>

</body>