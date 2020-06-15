<?php include("inc/header.inc.php");?>
<body>
    <?php include("inc/navco.inc.php");?>
    
  

    <?php 
    
     $pdo = new PDO("mysql:host=localhost; dbname=registration", "root","",);
     
        if(!empty($_POST)){
            $name ="";
            if(!empty($_FILES)){
                foreach($_FILES["img"]["error"] as $key =>$error){
                    if($error == UPLOAD_ERR_OK){
                        $tmp_name = $_FILES["img"]["tmp_name"][$key];
                        $name = basename($_FILES["img"]["name"][$key]);
                        move_uploaded_file($tmp_name,"assets/img/$name");
                    }
                }
            }
        }

        
        
        $requeteSQL = "INSERT INTO annonces(type_logement, nbr_voyageur, prix, ville, adresse, cheminImg, description) VALUES('$_POST[type_logement]','$_POST[nbr_voyageur]','$_POST[prix]','$_POST[ville]','$_POST[adresse]','assets/img/$name','$_POST[description]')";
        $result= $pdo->exec($requeteSQL);
        echo $requeteSQL;
        echo $result;

      
        
    ?>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="titre">Type de logement</label>
            <input type="texte" class="form-control" id="type_logement" name="type_logement">
        </div>
        <div class="form-group">
            <label for="titre">Nombre de voyageur</label>
            <input type="number" class="form-control" id="nbr_voyageur" name="nbr_voyageur">
        </div>
        <div class="form-group">
            <label for="titre">Prix</label>
            <input type="float" class="form-control" id="prix" name="prix">
        </div>
        <div class="form-group">
            <label for="titre">ville</label>
            <input type="texte" class="form-control" id="ville" name="ville">
        </div>
        <div class="form-group">
            <label for="titre">Adresse</label>
            <input type="texte" class="form-control" id="adresse" name="adresse">
        </div>
        

        <div class="form-group">
            <label for="titre">Photo</label>
            <input type="file" class="form-control-file" id="img" name="img[]">
        </div>

        <div class="form-group">
            <label for="description_emplois">Description du logement</label>
            <textarea rows="10" class="form-control" id="description" name="description"> </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>
</div>
</body>