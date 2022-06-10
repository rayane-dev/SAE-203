<?php
    session_start();
   require_once 'config.php';
   if(isset($_POST['envoie'])){
    if(!empty($_POST['adresse_mail']) && !empty($_POST['mdp']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['NumEtudiant']) ){
        $adresse_mail = htmlspecialchars($_POST['adresse_mail']);
        $mdp = sha1($_POST['mdp']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom =  htmlspecialchars($_POST['nom']);
        $NumEtudiant = htmlspecialchars($_POST['NumEtudiant']);
        
        $inserUser= $bdd->prepare('INSERT INTO etudiant( prenom, nom, adresse_mail, mdp, NumEtudiant) VALUES ( :prenom,:nom,:adresse_mail,:password,:NumEtudiant)');                          
        $inserUser -> execute(array( 'prenom'=>$prenom, 'nom'=>$nom,'adresse_mail'=>$adresse_mail, 'password'=>$mdp, 'NumEtudiant'=>$NumEtudiant,));     echo ( $adresse_mail);



        $recupUser = $bdd->prepare('SELECT * FROM etudiant WHERE adresse_mail= ? AND mdp = ? AND prenom = ? AND nom = ? AND NumEtudiant = ?');
        $recupUser->execute(array($adresse_mail, $mdp,$prenom,$nom,$NumEtudiant));
            
    
            if($recupUser-> rowCount() > 0) {
                $_SESSION['adresse_mail']= $adresse_mail;
                $_SESSION['mdp'] = $mdp ;
                $_SESSION['nom'] = $nom ;
                $_SESSION['prenom'] = $prenom ;
                $_SESSION['NumEtudiant'] = $NumEtudiant ;
                $_SESSION['Idetudiant'] = $recupUser->fetch()['Idetudiant'];
                
                } 
                    header('Location: index.php');
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
    <link rel="stylesheet" href="styles/inscription.css">
</head>
<body>
    
    <div id="block-form">
        <div id="left">
            <div id="header-form">
                <img src="image/gustave-image.png" alt="">
                <h1>Inscription</h1>
            </div>
            <div id="formulaire">
                <form method="POST">
                <input type="text" placeholder="Prenom" name="prenom" id="prenom" required>
                <input type="text" placeholder="Nom" name="nom" id="nom" required>
                <input type="text" placeholder="INE"  name="NumEtudiant"id="INE">
                <input type="text" placeholder="Mail" name="adresse_mail" id="mail" required>
                <input type="text" placeholder="Mot de passe" name="mdp" id="mdp" required>
                <br>          
                <a href="index.php"><input type="submit" placeholder="envoie" name="envoie"></a>
            </form>
            </div>
            <div id="button-part">
                
                <a href="connexion.php" id="connexion">J'ai deja un compte</a>
            </div>
        </div>
        <div id="right">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="430.698" height="523.372" viewBox="0 0 430.698 523.372">
                <defs>
                  <linearGradient id="linear-gradient" x1="0.43" y1="0.015" x2="0.559" y2="0.97" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#253298"/>
                    <stop offset="1" stop-color="#146ea7" stop-opacity="0"/>
                  </linearGradient>
                </defs>
                <g id="Illustration" transform="translate(-0.9 -0.997)">
                  <path id="Path" d="M0,0,164.75,95.163v85.863L14.56,94.222.055,98.983Z" transform="translate(247.804 207.601)" opacity="0.3" fill="url(#linear-gradient)"/>
                  <path id="Path-2" data-name="Path" d="M18.712,19.312c0,7.086-4.207,10.408-9.356,7.418S0,15.6,0,8.517,4.207-1.891,9.356,1.1C14.5,4.033,18.712,12.226,18.712,19.312Z" transform="translate(262.585 236.397)" fill="url(#linear-gradient)"/>
                  <path id="Path-3" data-name="Path" d="M0,0,36.095,20.871V28.4L0,7.529Z" transform="translate(290.154 252.941)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-4" data-name="Path" d="M0,0,107.785,62.28v7.529L0,7.529Z" transform="translate(290.154 268.054)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-5" data-name="Path" d="M0,0,84.313,48.717v7.529L0,7.529V0Z" transform="translate(290.154 283.112)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-6" data-name="Path" d="M0,0,92.783,53.533V225.425L0,171.892Z" transform="translate(128.117 93.062)" opacity="0.3" fill="url(#linear-gradient)"/>
                  <path id="Path-7" data-name="Path" d="M0,0,74.514,43.014v7.529L0,7.529Z" transform="translate(137.251 195.09)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-8" data-name="Path" d="M0,0,64.051,36.98v7.529L0,7.529Z" transform="translate(142.455 212.749)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-9" data-name="Path" d="M64.549,37.257,0,0V19.21L64.549,56.467Z" transform="translate(104.976 206.272)" fill="url(#linear-gradient)"/>
                  <path id="Path-10" data-name="Path" d="M21.48,22.61c0,8.3-4.816,12.234-10.74,8.8S0,18.4,0,10.043c0-8.3,4.816-12.234,10.74-8.8C16.663,4.784,21.48,14.306,21.48,22.61Z" transform="translate(163.602 137.991)" fill="url(#linear-gradient)"/>
                  <path id="Path-11" data-name="Path" d="M18.9,2.237C9.322-3.355,1.405,1.9.021,13.918A6.964,6.964,0,0,0,3.287,19.9L34.51,38.165c1.938,1.107,3.488.221,3.266-2.159C36.392,22.332,28.476,7.828,18.9,2.237Z" transform="translate(155.443 173.865)" fill="url(#linear-gradient)"/>
                  <path id="Path-12" data-name="Path" d="M0,0,92.783,53.533V225.425L0,171.892Z" transform="translate(192.5 298.944)" opacity="0.3" fill="url(#linear-gradient)"/>
                  <path id="Path-13" data-name="Path" d="M0,0,74.514,43.014v7.529L0,7.529Z" transform="translate(201.579 400.972)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-14" data-name="Path" d="M0,0,64.051,36.98v7.529L0,7.529Z" transform="translate(206.783 418.632)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-15" data-name="Path" d="M64.549,37.257,0,0V19.21L64.549,56.467Z" transform="translate(243.708 455.059)" fill="url(#linear-gradient)"/>
                  <path id="Path-16" data-name="Path" d="M21.48,22.61c0,8.3-4.816,12.234-10.74,8.8C4.816,27.924,0,18.4,0,10.043c0-8.3,4.816-12.234,10.74-8.8C16.663,4.729,21.48,14.306,21.48,22.61Z" transform="translate(227.93 343.874)" fill="url(#linear-gradient)"/>
                  <path id="Path-17" data-name="Path" d="M18.9,2.237C9.322-3.355,1.405,1.9.021,13.918A6.964,6.964,0,0,0,3.287,19.9L34.51,38.165c1.938,1.107,3.488.221,3.266-2.159C36.392,22.332,28.476,7.828,18.9,2.237Z" transform="translate(219.771 379.747)" fill="url(#linear-gradient)"/>
                  <path id="Path-18" data-name="Path" d="M164.75,95.163,0,0V85.863l150.246,86.749,14.56,21.535Z" transform="translate(0.9 188.779)" opacity="0.3" fill="url(#linear-gradient)"/>
                  <path id="Path-19" data-name="Path" d="M0,8.517C0,15.6,4.207,23.741,9.356,26.73s9.356-.332,9.356-7.418S14.5,4.088,9.356,1.1,0,1.431,0,8.517Z" transform="translate(132.158 284.836)" fill="url(#linear-gradient)"/>
                  <path id="Path-20" data-name="Path" d="M36.095,20.815,0,0V7.529L36.095,28.4Z" transform="translate(87.206 259.528)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-21" data-name="Path" d="M107.785,62.28,0,0V7.529l107.785,62.28Z" transform="translate(15.515 233.177)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-22" data-name="Path" d="M84.313,48.717,0,0V7.529L84.313,56.245Z" transform="translate(38.987 261.853)" opacity="0.15" fill="url(#linear-gradient)"/>
                  <path id="Path-23" data-name="Path" d="M193.7,54.974C100.256,1,23.86,64.939,23.86,199.131L0,185.346C.055,33.771,86.472-39.968,193.7,21.924Z" transform="translate(215.751 17.051)" opacity="0.4" fill="url(#linear-gradient)"/>
                  <path id="Path-24" data-name="Path" d="M23.86,107.782c0-59.567,34.877-87.745,77.891-62.944V11.789C45.561-20.652,0,16.162,0,94Z" transform="translate(307.648 161.545)" opacity="0.4" fill="url(#linear-gradient)"/>
                  <path id="Path-25" data-name="Path" d="M23.86,150.632c0-95.108,55.692-140.06,124.283-100.422V17.159C66.376-30.062,0,23.526,0,136.847Z" transform="translate(261.146 91.237)" opacity="0.4" fill="url(#linear-gradient)"/>
                  <path id="Path-26" data-name="Path" d="M22.642,65.467c12.511,7.252,22.642-1,22.642-18.324S35.153,9.886,22.642,2.634,0,3.63,0,20.958C0,38.341,10.131,58.215,22.642,65.467Z" transform="translate(364.115 235.692)" opacity="0.4" fill="url(#linear-gradient)"/>
                  <path id="Path-27" data-name="Path" d="M193.7,54.974C100.2,1,23.86,64.939,23.86,199.131L0,185.346C.055,33.771,86.472-39.968,193.7,21.924Z" transform="translate(237.895 0.997)" opacity="0.07" fill="url(#linear-gradient)"/>
                  <path id="Path-28" data-name="Path" d="M23.86,107.782c0-59.567,34.877-87.745,77.891-62.944V11.789C45.561-20.652,0,16.162,0,94Z" transform="translate(329.792 145.49)" opacity="0.07" fill="url(#linear-gradient)"/>
                  <path id="Path-29" data-name="Path" d="M23.86,150.632c0-95.108,55.692-140.06,124.283-100.422V17.159C66.376-30.062,0,23.526,0,136.847Z" transform="translate(283.29 75.183)" opacity="0.07" fill="url(#linear-gradient)"/>
                  <path id="Path-30" data-name="Path" d="M22.642,65.467c12.511,7.252,22.642-1,22.642-18.324S35.153,9.886,22.642,2.634,0,3.63,0,20.958C0,38.341,10.131,58.215,22.642,65.467Z" transform="translate(386.259 219.638)" opacity="0.07" fill="url(#linear-gradient)"/>
                  <path id="Path-31" data-name="Path" d="M23.14.8a13.11,13.11,0,0,1,5.979,10.352V28.037L40.3,34.459a13.125,13.125,0,0,1,5.979,10.408c0,3.82-2.657,5.37-5.979,3.488L29.119,41.932V58.817c0,3.82-2.657,5.37-5.979,3.488A13.125,13.125,0,0,1,17.162,51.9V35.012L5.979,28.591A13.11,13.11,0,0,1,0,18.238c0-3.82,2.657-5.37,5.979-3.488l11.183,6.422V4.288C17.162.468,19.819-1.082,23.14.8Z" transform="translate(313.239 370.278)" opacity="0.2" fill="url(#linear-gradient)"/>
                  <path id="Path-32" data-name="Path" d="M16.66,0,32.05,30.226c2.1,4.152,1.772,8.3-.775,9.3s-6.311-1.605-8.415-5.757l-.166-.388V66.93c0,3.82-2.657,5.37-5.979,3.488a13.194,13.194,0,0,1-5.979-10.352V26.517l-.166.166c-2.1,1.716-5.923-.055-8.415-3.986-2.547-3.931-2.879-8.47-.775-10.186Z" transform="translate(55.931 129.931)" opacity="0.2" fill="url(#linear-gradient)"/>
                </g>
              </svg>
              
        </div>
    </div>
    
    
</body>
</html>