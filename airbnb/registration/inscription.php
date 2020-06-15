<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>AirBnb</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/connexion.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="../assets/js/function.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </head>

    <body>
    <div class="top-nav clearfix">
        <a href="../index.php">
            <img src="../assets/img/airbnb.svg" alt="airbnb" class="logo" />
        </a>
        <div id="nav-search-wrapper">
        <form method="GET" action="index.php">
            <input type="text" name="nav-search" id="nav-search" placeholder="Search">
        </form>
        </div>

        <ul>
        <li><a href="#">Devenir un Hôte</a></li>
        <li><a href="#">Créer une expérience</a></li>
        <li><a href="#">Aide</a></li>
        <li><a href="connexion.php">Connexion</a></li>
        <li><a href="registration/inscription.php">Inscription</a></li>
        </ul>


    <?php 
        
        require('inscriptionbd.php');

       
       
        if(isset($_REQUEST['prenom'],$_REQUEST['nom'],$_REQUEST['sexe'],$_REQUEST['sexe'],$_REQUEST['ville'],$_REQUEST['numtel'],$_REQUEST['password'],$_REQUEST['email'],$_REQUEST['pays'])){
            $prenom = stripslashes($_REQUEST['prenom']);
            $prenom = mysqli_real_escape_string($conn, $prenom);

            $nom = stripslashes($_REQUEST['nom']);
            $nom = mysqli_real_escape_string($conn, $nom);

            $sexe = stripslashes($_REQUEST['sexe']);
            $sexe = mysqli_real_escape_string($conn, $sexe);

            $ville = stripslashes($_REQUEST['ville']);
            $ville = mysqli_real_escape_string($conn, $ville);

            $numtel = stripslashes($_REQUEST['numtel']);
            $numtel = mysqli_real_escape_string($conn, $numtel);

            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn, $password);

            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($conn, $email);

            $pays = stripslashes($_REQUEST['pays']);
            $pays = mysqli_real_escape_string($conn, $pays);
            


                $query = "INSERT INTO `users` (prenom, nom, sexe, ville, numtel, password, email, pays)
                            VALUES('$prenom', '$nom', '$sexe', '$ville','$numtel','$password','$email','$pays')";
                $res = mysqli_query($conn,$query);
                echo $res;

                if($res){
                    echo "Vous êtes inscrit";
                   
                }

        }else{
                ?>

                <form class="box" action="" method="post">
                    <h1 class="box-logo box-title">INSCRIPTION</h1>
                    <input type="text" class="box-input" name="prenom" placeholder="Prenom" required/>
                    <input type="text" class="box-input" name="nom" placeholder="Nom" required/>
                    <input type="text" class="box-input" name="sexe" placeholder="m/f" required/>
                    <input type="text" class="box-input" name="ville" placeholder="ville" required/>
                    <input type="text" class="box-input" name="pays" placeholder="pays" required />
                    <input type="number" class="box-input" name="numtel" placeholder="06...." required/>
                    <input type="password" class="box-input" name="password" placeholder="password" required />
                    <input type="text" class="box-input" name="email" placeholder="email" required />
                    <input type="submit" class="box-input" name="submit" value="S'incrire" class="box-button"/>
                    
                    <div class="form-group">
         
        </div>

                    <p class="box-register">Déjà inscrit? <a href="connexion.php">Connectez-vous ici</a></p>


                </form>
            <?php } ?>



      

    
    </body>





</div>