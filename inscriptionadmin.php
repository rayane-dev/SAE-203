<?php
    session_start();
   require_once 'config.php';
   if(isset($_POST['envoie'])){
    if(!empty($_POST['adresse_mail']) && !empty($_POST['mdp']) && !empty($_POST['prenom']) && !empty($_POST['nom'])){
        $adresse_mail = htmlspecialchars($_POST['adresse_mail']);
        $mdp = sha1($_POST['mdp']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom =  htmlspecialchars($_POST['nom']);
       
        
        $inserUser= $bdd->prepare('INSERT INTO admin( prenom, nom, adresse_mail, mdp) VALUES ( :prenom,:nom,:adresse_mail,:password,)');                          
        $inserUser -> execute(array( 'prenom'=>$prenom, 'nom'=>$nom,'adresse_mail'=>$adresse_mail, 'password'=>$mdp,)); 



        $recupUser = $bdd->prepare('SELECT * FROM admin WHERE adresse_mail= ? AND mdp = ? AND prenom = ? AND nom = ?');
        $recupUser->execute(array($adresse_mail, $mdp,$prenom,$nom));
            
    
            if($recupUser-> rowCount() > 0) {
                $_SESSION['adresse_mail']= $adresse_mail;
                $_SESSION['mdp'] = $mdp ;
                $_SESSION['nom'] = $nom ;
                $_SESSION['prenom'] = $prenom ;
                
                
                } 
                 header('Location:connexionadmin.php');
    }else{
        echo("veuillez completer tous les champs");
       
        
        }
    }

    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>

    <div id="block-form">
    
        <div id="formulaire">
            <form method="POST" >
            <input  class="formulaire" type="text" placeholder="prenom" name="prenom" id="prenom" required>
            <input  class="formulaire" type="text" placeholder="nom" name="nom" id="nom" required>
            <input  class="formulaire" type="text" placeholder="adresse_mail" name="adresse_mail" id="mail" required>
            <input  class="formulaire" type="text" placeholder="mdp" name="mdp" id="mdp" required>
          
                 <br>          
            <input type="submit" name="envoie">
            </form>
        </div>

        <a href="index.php" id="lien"><div id="button"><p>Entrer</p></div></a>
        <a href="connexion.php" id="connexion">J'ai deja un compte</a>

    </div>
    
</body>
</html>