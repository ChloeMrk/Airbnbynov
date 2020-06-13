<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>AirBnb</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
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
        <li><a href="inscription.php">Inscription</a></li>
    </ul>

    <?php 
        require('inscriptionbd.php');
        session_start();
        if(isset($_POST['email'])){
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($conn, $email);

            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn, $password);

            $query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            $row = mysqli_num_rows($result);

            if($row==1){
                $_SESSION['email'] = $email;
                header("Location: ../indexco.php");
            }

            else{
                $message="Le nom d'utilisateur ou le mot de passe est incorrect.";

            }

        }
    
    ?>
    <form class="box" action="" method="post" name="login">
    <h1>Connexion</h1>
    <input type="text" class="box-input" name="email" placeholder="Email">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion " name="submit" class="box-button">
    <p class="box-register">Vous êtes nouveau ici? <a href="inscription.php">S'inscrire</a></p>
    <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>

    </form>
    

</body>
