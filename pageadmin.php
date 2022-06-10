<?php         
  session_start();
  require_once 'config.php';
  if(!isset($_SESSION['prenom']))
  header('Location: connexion.php ');
                ?>
               
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUT GUSTAVE</title>
    <link rel="stylesheet" href="styles/style.css">

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;800;900&family=Roboto:ital,wght@1,500&family=Square+Peg&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@200;300;400;600;700;800;900&family=Roboto:ital,wght@1,500&family=Square+Peg&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  
    <header>
        <div class="container">
            <div class="left">
                <h1>IUT GUSTAVE <span>.</span></h1>
            </div>
            <div class="right">
                <nav>
                    <!--<a href="#">Home</a>-->
                    <H1><?php echo $_SESSION['prenom'];  ?></H1>
                    <a href="index.php">Home</a>
                    <a href="produit.php">Reservation</a>
                    <a href="connexion.php">Conexion</a>
                    <a href="deconnexion.php">Deconexion</a>
                    <a href="inscription.php">Inscription</a>
                    <a href="connexionadmin.php">Admin</a>
</header>
<body>
    <Section>
        <H1 style="margin-top:10%; margin-left:40%; margin-right:50%;"> page en developpement</h1>
    </section>
</body>
</html>