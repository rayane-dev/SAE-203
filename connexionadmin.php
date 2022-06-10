<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
<?php
    session_start();
    require_once 'config.php';
if(isset($_POST['envoie'])){
    if(!empty($_POST['adresse_mail']) && !empty($_POST['mdp'])){
    $adresse_mail = htmlspecialchars($_POST['adresse_mail']);
    $mdp = htmlspecialchars($_POST['mdp']);
   
    $recupUser = $bdd->prepare('SELECT * FROM   admin  WHERE adresse_mail= ? AND mdp = ?');
    $recupUser->execute(array($adresse_mail, $mdp));
        
   
         if($recupUser-> rowCount() > 0) {
             $_SESSION['adresse_mail']= $adresse_mail;
             $_SESSION['mdp'] = $mdp ;
             $_SESSION['prenom'] = $recupUser->fetch()['prenom'];
             header('Location: pageadmin.php');
             

         }else{
            $err = "mot de passe ou Email incorrect";
         }   
    }else{
        echo"veuillez completer tous les champs";
        
        }
}

    ?>
    <div id="block-form"> 

        <div id="formulaire">
            <?php
           if(isset($_POST['envoie'])){
                
            echo ($err);
            }
            ?>
        <form method="POST">    
        <input type="text" placeholder="adresse mail" name="adresse_mail" id="mail" autocomplete="off" required>
        <input type="text" placeholder="mot de passe" name="mdp" id="mdp" autocomplete="off"required>
        <input type="submit" name="envoie">
        </form>
    </div>


       
        <a href="inscription.php" id="connexion">Creer un compte</a>

    </div>
    
</body>
</html>