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

</head>

<body>
    <header>
        <div class="container">
            <div class="left">
                <img src="image/gustave-eiffel.png" alt="">
                <!--<h1>IUT GUSTAVE <span>.</span></h1>-->
            </div>
            <div class="right">
            <nav>
                    <!--<a href="#">Home</a>-->
                    <H1><?php echo $_SESSION['prenom'];  ?></H1>
                    <a href="index.php">Home</a>
                    <a href="produit/produit.php">Reservation</a>
                    <a href="connexion.php">Conexion</a>
                    <a href="deconnexion.php">Deconexion</a>
                    <a href="inscription.php">Inscription</a>
                    <a href="connexionadmin.php">Admin</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="main-part">
      <div class="container">
        <div class="middle-content">

          <div class="left">
            <div class="bloc-text">
              <h1>Visiter la salle VR</h1>
              <p>La salle VR vous permet de vivre des experiences unique en testant des appareils de dernieres générartions </p>
            </div>

            <div class="button-projet">
              <a href="#"><p>Découvrir</p></a>
              <a href="#"><p>Nos produits</p></a>
            </div>
          </div>
     

          <div class="right">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="396.847" height="600.947" viewBox="0 0 396.847 600.947">
              <defs>
                <linearGradient id="linear-gradient" x1="1.626" y1="-0.035" x2="-0.156" y2="0.684" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#0092f6"/>
                  <stop offset="0.493" stop-color="#0092f6" stop-opacity="0.969"/>
                  <stop offset="0.903" stop-color="#fff" stop-opacity="0"/>
                  <stop offset="1" stop-color="red" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g id="Illustration" transform="translate(-0.2 -0.238)">

                
                  <path id="Path" d="M52.577,151.946c-4.868-2.806-8.362-2.864-10.481-.229-2.176,2.635-3.207,7.1-3.207,13.345v33.791a59.749,59.749,0,0,1-1.775,15.979c-1.2,4.41-3.207,7.5-5.956,9.336-2.692,1.89-6.357,2.348-11,1.489-4.525-.8-10.195-3.207-16.953-7.1L0,216.665V190.033l4.066,2.348c4.868,2.806,8.076,3.15,9.679,1.145q2.577-3.007,2.577-12.371V151.373c0-7.789.745-13.917,2.291-18.385a12.553,12.553,0,0,1,9.049-8.648,56.753,56.753,0,0,1-9.049-19.129A90.675,90.675,0,0,1,16.38,84.192V54.41c0-6.243-.859-11.4-2.577-15.349-1.6-3.895-4.868-7.274-9.679-10.08L.057,26.632V0L3.265,1.89A85.027,85.027,0,0,1,20.217,14.376a57.2,57.2,0,0,1,11,14.2A55.078,55.078,0,0,1,37.17,44.788a86.056,86.056,0,0,1,1.775,18.041V96.62a44.205,44.205,0,0,0,3.207,17.067,24.313,24.313,0,0,0,10.481,11.856Z" transform="translate(173.623 20.319)" opacity="0.4" fill="url(#linear-gradient)"/>

                <path id="Path-2" data-name="Path" d="M0,74.147c4.868,2.806,8.362,2.864,10.481.229,2.176-2.635,3.207-7.1,3.207-13.345V27.24a59.749,59.749,0,0,1,1.775-15.979c1.2-4.41,3.15-7.5,5.842-9.393C24.112.035,27.778-.423,32.3.379c4.639.859,10.366,3.265,17.125,7.216l3.207,1.89V36.118l-4.066-2.348c-4.868-2.806-8.133-3.207-9.851-1.2-1.6,2.062-2.405,6.186-2.405,12.486V74.834c0,7.732-.745,13.917-2.291,18.385a12.553,12.553,0,0,1-9.049,8.648A56.753,56.753,0,0,1,34.02,121a90.675,90.675,0,0,1,2.234,21.019V171.8q0,9.364,2.405,15.292c1.718,3.952,4.983,7.388,9.851,10.137l4.066,2.348v26.632l-3.207-1.89a90.134,90.134,0,0,1-17.125-12.543,60.753,60.753,0,0,1-11-14.2,57.427,57.427,0,0,1-5.785-16.094,86.056,86.056,0,0,1-1.775-18.041V129.645a44.205,44.205,0,0,0-3.207-17.067A24.313,24.313,0,0,0,0,100.722V74.147Z" transform="translate(103.521 0.238)" opacity="0.4" fill="url(#linear-gradient)"/>
                <path id="Path-3" data-name="Path" d="M.057,0l120.9,69.816-.057,289.86L0,289.917Z" transform="translate(242.695 7.605)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-4" data-name="Path" d="M0,0,96.219,55.5V82.13L0,26.632Z" transform="translate(220.015 45.577)" fill="url(#linear-gradient)"/>
                <path id="Path-5" data-name="Path" d="M0,0,91.179,52.634v80.583L0,80.583Z" transform="translate(258.502 168.886)" opacity="0.2" fill="url(#linear-gradient)"/>
                <path id="Path-6" data-name="Path" d="M0,0,92.554,53.436v9.106L0,9.106Z" transform="translate(257.586 107.088)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-7" data-name="Path" d="M0,0,80.011,46.162v9.106L0,9.106Z" transform="translate(257.586 125.416)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-8" data-name="Path" d="M0,0,67.926,39.175v9.106L0,9.106Z" transform="translate(257.586 143.514)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-9" data-name="Path" d="M.057,0l120.9,69.816v38.831L0,38.889Z" transform="translate(242.695 7.605)" opacity="0.2" fill="url(#linear-gradient)"/>
                <path id="Path-10" data-name="Path" d="M15.349,15.965c0,5.9-3.436,8.648-7.675,6.186S0,12.987,0,7.088,3.436-1.561,7.675.9,15.349,10.123,15.349,15.965Z" transform="translate(257.586 28.753)" opacity="0.2" fill="url(#linear-gradient)"/>
                <path id="Path-11" data-name="Path" d="M.057,0,372.219,214.775l-.057,290.032L0,290.032Z" transform="translate(24.828 96.378)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-12" data-name="Path" d="M0,0,96.162,55.5V82.13L0,26.689Z" transform="translate(0.2 167.855)" fill="url(#linear-gradient)"/>
                <path id="Path-13" data-name="Path" d="M0,0,213.515,123.252v9.106L0,9.106Z" transform="translate(49.97 241.05)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-14" data-name="Path" d="M0,0,184.191,106.3v9.106L0,9.106Z" transform="translate(49.97 259.378)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-15" data-name="Path" d="M0,0,156.757,90.492V99.6L0,9.106Z" transform="translate(49.97 277.533)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-16" data-name="Path" d="M0,0,187.742,108.361v80.583L0,80.583Z" transform="translate(194.07 392.996)" opacity="0.2" fill="url(#linear-gradient)"/>
                <path id="Path-17" data-name="Path" d="M0,0,28.293,16.323V42.955L0,26.632Z" transform="translate(208.217 417.108)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-18" data-name="Path" d="M0,0,28.293,16.323V42.955L0,26.632Z" transform="translate(242.867 438.414)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-19" data-name="Path" d="M0,0,28.293,16.323V42.955L0,26.632Z" transform="translate(277.689 458.173)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-20" data-name="Path" d="M0,0,28.293,16.323V42.955L0,26.632Z" transform="translate(312.511 479.193)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-21" data-name="Path" d="M0,0,156.3,90.205v80.583L0,80.526Z" transform="translate(15.034 286.583)" opacity="0.2" fill="url(#linear-gradient)"/>
                <path id="Path-22" data-name="Path" d="M0,0,124.168,71.649v9.106L0,9.106Z" transform="translate(30.784 316.307)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-23" data-name="Path" d="M0,0,99.426,57.388v9.106L0,9.049Z" transform="translate(30.784 334.635)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-24" data-name="Path" d="M0,0,371.646,214.546v39.289L0,39.347Z" transform="translate(24.885 96.378)" opacity="0.2" fill="url(#linear-gradient)"/>
                <path id="Path-25" data-name="Path" d="M15.349,15.965c0,5.9-3.436,8.648-7.675,6.186S0,12.987,0,7.088,3.436-1.561,7.675.9,15.349,10.123,15.349,15.965Z" transform="translate(50.028 123.425)" opacity="0.2" fill="url(#linear-gradient)"/>
              </g>
            </svg>
          
            <svg xmlns="http://www.w3.org/2000/svg" width="208.447" height="577.3" viewBox="0 0 208.447 577.3" id="fusee_svg">
              <g id="Illustration" transform="translate(-307.82 -0.9)">
                <path id="Path" d="M0,92.6c17.2,21.5,36.3,45.1,49.7,61.6C64.6,109.4,44.7,46.8,22.5,0A858.823,858.823,0,0,1,0,92.6Z" transform="translate(444.8 412)" fill="#3647cc"/>
                <path id="Path-2" data-name="Path" d="M32.18,0c-22.1,21.2-41.9,60.8-27,122.7,13.4-1.1,32.4-2.6,49.6-4.2C44.98,74.5,37.58,35.2,32.18,0Z" transform="translate(307.82 338.8)" fill="#3647cc"/>
                <path id="Path-3" data-name="Path" d="M59.365,531.1C-64.235,56.5,37.465,16.2,75.865,0c38.4,60.6,140,218.2,16.3,550Z" transform="translate(328.235 28.2)" fill="#3647cc" opacity="0.2"/>
                <path id="Path-4" data-name="Path" d="M59.39,531.1C-64.21,56.6,37.39,16.2,75.89,0c38.4,60.6,140,218.2,16.3,550Z" transform="translate(364.61 0.9)" fill="#3647cc" opacity="0.1"/>
                <path id="Path-5" data-name="Path" d="M16.3,550C140,218.2,38.4,60.6,0,0V540.6Z" transform="translate(404.1 28.2)" fill="#3647cc" opacity="0.15"/>
                <path id="Path-6" data-name="Path" d="M76,78.719c0,28.9-17,42.5-38,30.4s-38-45.4-38-74.3,17-42.5,38-30.4S76,49.819,76,78.719Z" transform="translate(364.9 116.581)" fill="#3647cc" opacity="0.1"/>
              </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400.4" height="686.109" viewBox="0 0 437.4 686.109" id="media">
              <defs>
                <linearGradient id="linear-gradient" x1="-0.084" y1="0.208" x2="0.626" y2="0.646" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#3647cc"/>
                  <stop offset="1" stop-color="#3647cc" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g id="Illustration" transform="translate(0 -0.995)">
                <path id="Path" d="M70,201.9c-38.6,22.3-69.9-3-70-56.5C0,91.9,31.3,30.4,69.9,8.1s69.9,3,70,56.5a158.594,158.594,0,0,1-4.3,35.9l142.3,53.1c12.6-24.3,29.9-44.8,48.9-55.8,38.6-22.3,69.9,3,70,56.5,0,53.5-31.3,115-69.9,137.3-18.3,10.6-35,10.4-47.5,1.7L139.9,506.5c0,1.3.1,2.5.1,3.8,0,53.5-31.3,115-69.9,137.3s-69.9-3-70-56.5c0-53.5,31.3-115,69.9-137.3,25.4-14.6,47.6-8.7,59.9,12.2L261.1,265.6c-2.7-8.7-4.1-18.9-4.1-30.5a154.806,154.806,0,0,1,3.5-32.2L117.2,149.4C104.7,172.3,88.2,191.4,70,201.9Z" transform="translate(40.6 31.395)" opacity="0.4" fill="url(#linear-gradient)"/>
                <path id="Path-2" data-name="Path" d="M0,145.4c0,53.5,31.3,78.8,70,56.5,38.6-22.3,69.9-83.8,69.9-137.3s-31.3-78.8-70-56.5C31.3,30.4,0,91.9,0,145.4Z" transform="translate(1 0.995)" opacity="0.07" fill="url(#linear-gradient)"/>
                <path id="Path-3" data-name="Path" d="M0,145.4c0,53.5,31.3,78.8,70,56.5s69.9-83.8,69.9-137.3-31.3-78.8-70-56.5C31.3,30.4,0,91.9,0,145.4Z" transform="translate(258 88.995)" opacity="0.07" fill="url(#linear-gradient)"/>
                <path id="Path-4" data-name="Path" d="M0,145.4c0,53.5,31.3,78.8,70,56.5s69.9-83.8,69.9-137.3-31.3-78.8-70-56.5C31.3,30.4,0,91.9,0,145.4Z" transform="translate(0 446.995)" opacity="0.07" fill="url(#linear-gradient)"/>
                <path id="Path-5" data-name="Path" d="M65.2,0,0,37.6V50.9L65.2,13.3Z" transform="translate(219.7 522.8)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-6" data-name="Path" d="M117.7,0,0,67.9V81.2L117.7,13.3Z" transform="translate(167.2 549.4)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-7" data-name="Path" d="M152.3,0,0,87.8v13.3L152.3,13.3Z" transform="translate(132.6 576.1)" opacity="0.15" fill="url(#linear-gradient)"/>
              </g>
            </svg>

            <!--Bouclier-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="411.5" height="605.4" viewBox="0 0 411.5 605.4" id="shield">
              <defs>
                <linearGradient id="linear-gradient" x1="0.611" y1="0.318" x2="0.389" y2="0.682" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#0092f6"/>
                  <stop offset="1" stop-color="#3647cc" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g id="Illustration" transform="translate(-390.7 -0.3)">
                <path id="Path" d="M171.7,4.4C131.1,12.3,39.8,22.5,0,0,.3,159.2,39.3,385.1,166.8,571.4c129.5-40.9,172-220.6,175-377.9C302,170.9,211.8,58,171.7,4.4Z" transform="translate(460.4 0.3)" opacity="0.1" fill="url(#linear-gradient)"/>
                <path id="Path-2" data-name="Path" d="M171.7,4.4C131.1,12.3,39.8,22.5,0,0,.3,159.2,39.3,385.1,166.8,571.4c129.5-40.9,172-220.7,175-377.9C302,170.9,211.8,58,171.7,4.4Z" transform="translate(410.8 33.3)" opacity="0.3" fill="url(#linear-gradient)"/>
                <path id="Path-3" data-name="Path" d="M175,189C135.1,166.4,45,53.6,4.9,0L0,566.9C129.4,526.1,171.9,346.3,175,189Z" transform="translate(577.7 37.7)" opacity="0.4" fill="url(#linear-gradient)"/>
                <path id="Path-4" data-name="Path" d="M0,0,70,38.5V52.1L0,13.6Z" transform="translate(394.7 466)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-5" data-name="Path" d="M0,0,70,38.5V52.1L0,13.6Z" transform="translate(395 493)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-6" data-name="Path" d="M0,0,132.8,73.1V86.7L0,13.6Z" transform="translate(394.9 519)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-7" data-name="Path" d="M25.5,25.873c0,9.6-5.7,14.3-12.7,10.4S0,21.473,0,11.773c0-9.6,5.7-14.3,12.7-10.4C19.8,5.273,25.5,16.273,25.5,25.873Z" transform="translate(390.7 372.527)" opacity="0.2" fill="url(#linear-gradient)"/>
              </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="754.2" height="933.3" viewBox="0 0 754.2 933.3" id="page_svg">
              <defs>
                <linearGradient id="linear-gradient" x1="0.695" y1="0.357" x2="0.322" y2="0.631" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#0092f6"/>
                  <stop offset="1" stop-color="#3647cc" stop-opacity="0"/>
                </linearGradient>
              </defs>
              <g id="Illustration" transform="translate(-0.9 -0.1)">
                <path id="Path" d="M.1,0,687.9,397l-.1,536L0,536Z" transform="translate(65.7 0.1)" opacity="0.1" fill="url(#linear-gradient)"/>
                <path id="Path-2" data-name="Path" d="M0,0,686.9,396.5v72.7L0,72.7Z" transform="translate(65.8 0.1)" opacity="0.2" fill="url(#linear-gradient)"/>
                <path id="Path-3" data-name="Path" d="M0,0,177.8,102.6v49.3L0,49.3Z" transform="translate(0.9 242.9)" fill="url(#linear-gradient)"/>
                <path id="Path-4" data-name="Path" d="M0,0,177.8,102.6v49.3L0,49.3Z" transform="translate(491.1 517.8)" fill="url(#linear-gradient)"/>
                <path id="Path-5" data-name="Path" d="M0,0,347,200.3V349.2L0,148.9Z" transform="translate(374.5 584.2)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-6" data-name="Path" d="M0,0,347,200.3V349.2L0,148.9Z" transform="translate(408.1 567.4)" opacity="0.07" fill="url(#linear-gradient)"/>
                <path id="Path-7" data-name="Path" d="M0,0,52.3,30.2V79.5L0,49.3Z" transform="translate(400.2 629.3)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-8" data-name="Path" d="M0,0,52.3,30.2V79.5L0,49.3Z" transform="translate(464.6 668.2)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-9" data-name="Path" d="M0,0,52.3,30.2V79.5L0,49.2Z" transform="translate(529 704.7)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-10" data-name="Path" d="M0,0,52.3,30.2V79.5L0,49.3Z" transform="translate(593.4 743.6)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-11" data-name="Path" d="M0,0,394.6,227.8v16.8L0,16.9Z" transform="translate(112.2 201.6)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-12" data-name="Path" d="M0,0,340.5,196.5v16.8L0,16.8Z" transform="translate(112.2 235.5)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-13" data-name="Path" d="M0,0,289.7,167.2V184L0,16.8Z" transform="translate(112.2 269)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-14" data-name="Path" d="M0,0,288.9,166.7V315.6L0,148.9Z" transform="translate(17.2 362.3)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-15" data-name="Path" d="M0,0,288.9,166.7V315.6L0,148.9Z" transform="translate(50.8 345.5)" opacity="0.07" fill="url(#linear-gradient)"/>
                <path id="Path-16" data-name="Path" d="M0,0,229.5,132.5v16.8L0,16.9Z" transform="translate(36.9 409.5)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-17" data-name="Path" d="M0,0,183.8,106.1v16.8L0,16.8Z" transform="translate(36.9 443.4)" opacity="0.15" fill="url(#linear-gradient)"/>
                <path id="Path-18" data-name="Path" d="M28.4,29.421c0,10.9-6.4,16-14.2,11.5S0,23.921,0,13.121s6.4-16,14.2-11.5S28.4,18.621,28.4,29.421Z" transform="translate(112.2 50.179)" opacity="0.2" fill="url(#linear-gradient)"/>
              </g>
            </svg>
            
            
            
          </div>

      </div>

      <div class="bottom-content">
        <div class="advertising">
          <p>Découvrir les produits que vous pouvez reservez</p>
          <a href=""><p>Découvrir</p></a>
        </div>
      </div>
    </section>

    <section class="form-part">
      <div class="home-form">
        <h1>Reserver un produit</h1>
        <div id="form">
          <input type="text" placeholder="numero INE"/>
          <input type="text" placeholder="email"/>
          <input type="text" placeholder="mot de passe"/>
          <a id="btn"><p>Confirmer</p></a>
        </div>
      </div>

      <section id="explanation">
        <div class="container">
          <h3>Comment ça marche ?</h3>
            <div id="cardUI">
              <div class="card">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="89.344" height="53.607" viewBox="0 0 89.344 53.607">
                    <g id="View" transform="translate(-2 -6)">
                      <path id="Tracé_1" data-name="Tracé 1" d="M46.672,6C33.365,6,2,17.306,2,32.8s31.365,26.8,44.672,26.8S91.344,48.3,91.344,32.8,59.979,6,46.672,6Zm0,48.733a20.636,20.636,0,0,1-11.756-3.7A21.784,21.784,0,0,1,27.122,41.2a22.671,22.671,0,0,1-1.2-12.67A22.187,22.187,0,0,1,31.709,17.3a20.94,20.94,0,0,1,10.835-6A20.471,20.471,0,0,1,54.77,12.543a21.341,21.341,0,0,1,9.5,8.077A22.5,22.5,0,0,1,61.621,48.3,20.839,20.839,0,0,1,46.672,54.733Z" fill="rgba(0,146,246,0.88)"/>
                      <path id="Tracé_2" data-name="Tracé 2" d="M24.774,42.3c9.089,0,16.458-7.637,16.458-17.057S33.863,8.182,24.774,8.182,8.316,15.818,8.316,25.238,15.684,42.3,24.774,42.3Z" transform="translate(21.898 7.565)" fill="rgba(0,146,246,0.88)"/>
                    </g>
                  </svg>
                </div>
                <div id="text">
                  <h4>Trouver</h4>
                  <p>Le site rescence plusieurs produits a votre disposition que vous pouvez louer pour votre travail ou une utilisation personnel</p>
                </div>
              </div>

              <div class="card">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="58.671" height="65.189" viewBox="0 0 58.671 65.189">
                    <g id="Files" transform="translate(-3 -2)">
                      <path id="Tracé_3" data-name="Tracé 3" d="M48.45,10.833l-6.91-6.91A6.518,6.518,0,0,0,36.944,2H12.889A4.889,4.889,0,0,0,8,6.889V55.781a4.889,4.889,0,0,0,4.889,4.889H45.484a4.889,4.889,0,0,0,4.889-4.889V15.429A6.518,6.518,0,0,0,48.45,10.833Z" transform="translate(11.297)" fill="#fff"/>
                      <path id="Tracé_4" data-name="Tracé 4" d="M43.45,12.833l-6.91-6.91A6.519,6.519,0,0,0,31.944,4H7.889A4.889,4.889,0,0,0,3,8.889V57.781a4.889,4.889,0,0,0,4.889,4.889H40.484a4.889,4.889,0,0,0,4.889-4.889V17.429A6.518,6.518,0,0,0,43.45,12.833Z" transform="translate(0 4.519)" fill="#1e90ff"/>
                    </g>
                  </svg>
                </div>
                <div id="text">
                  <h4>Reserver</h4>
                  <p>Pour réserver il vous suffit d'utiliser votre numéro INE ainsi qu'un indiquer une date pour le début et la fin du pret</p>
                </div>
              </div>

              <div class="card">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="55.534" height="86.043" viewBox="0 0 55.534 86.043">
                    <g id="Mouse" transform="translate(-5.5 -2.5)">
                      <path id="Tracé_5" data-name="Tracé 5" d="M31.663,21.713V15.831H60.534V9.95H6V3H31.663" transform="translate(0 0)" fill="none" stroke="#7e7d7a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                      <path id="Tracé_6" data-name="Tracé 6" d="M28.386,7a21.135,21.135,0,0,0-15.122,6.414A22.168,22.168,0,0,0,7,28.9V53.535A22.169,22.169,0,0,0,13.264,69.02a21.033,21.033,0,0,0,30.244,0,22.169,22.169,0,0,0,6.264-15.485V28.9a22.168,22.168,0,0,0-6.264-15.485A21.134,21.134,0,0,0,28.386,7Zm2.673,28.66H25.713v-18.5h5.346Z" transform="translate(3.277 13.109)" fill="#1e90ff"/>
                    </g>
                  </svg>                  
                </div>
                <div id="text">
                  <h4>Utiliser</h4>
                  <p>vous avez plus qu'a utiliser les produits et vous faire plaisirs</p>
                </div>
              </div>
            </div>
            <article id="intro-product">
              <h3>Quels sont les produits auquel je peux avoir accès</h3>
              <p>L'IUT de Meaux Gustave Eiffel a financé plusieurs objets, et type de materiel qui sont disponible dans la section suivante</p>
            </article>
            
        </div>
      </section>
    </section>
    <section id="all-product">
      <div class="container">
        <!--PRODUITS 1-->
        <div class="product">
          <div class="paragraph">
            <h4>Casque VR</h4>
            <p>Le casque VR vous plonge dans un monde virtuel pour une expérience immersive. Une technologie réservée aux adultes ou grands adolescents ! La VR pour Virtual Reality, ou RV pour Réalité Virtuelle, est désormais souvent complétée par l'AR pour Augmented Reality, ou RA pour Réalité Augmentée.</p>
            <a href="produit/produit.php"><p>réserver</p></a>
          </div>
          <div class="card-one">
            <div class="content">
              <h2>Oculus<br> RIFT</h2>
              <p></p>
            </div>
            <img src="image/oculus-quest-1.png" alt="">
          </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="366.177" height="311.985" viewBox="0 0 366.177 311.985" id="blob2">
          <g id="blob-haikei_1_" data-name="blob-haikei (1)" transform="translate(193.789 134.227)">
            <path id="Tracé_1" data-name="Tracé 1" d="M80.9-89.4C113.5-69,154.8-51.8,167.7-23s-2.5,69.1-25.8,100.6c-23.3,31.4-54.6,54-91.5,72.4C13.5,168.5-29.2,182.9-71,176s-82.8-35.2-104.7-74.1c-21.8-38.8-24.5-88.2-4.8-122.2,19.8-33.9,61.9-52.4,95.7-72.6s59.3-42.2,84.1-41.3c24.8.8,48.9,24.4,81.6,44.8" fill="#0092f6"/>
          </g>
        </svg>
        

        <!--PRODUITS 2-->
        <div class="product">
          <div class="paragraph">
            <h4>Caméra 360°</h4>
            <p>Une vidéo immersive aussi appelée vidéo 360 degrés est un enregistrement vidéo d'une scène du monde réel où l'image est enregistrée dans toutes les directions en même temps. Ces enregistrements vidéo sont réalisés avec un appareil communément appelée camera 360°.</p>
            <a href="produit/produit2.php"><p>réserver</p></a>
          </div>
          <div class="card-one" >
            <div class="content">
                <h2>Ricoh Theta Z1 caméra 360°</h2>
                <p></p>
            </div>
            <img src="image/camera360.png" alt="">
          </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="454.598" height="344.487" viewBox="0 0 454.598 344.487" id="blob1">
          <g id="blob-haikei" transform="translate(208.717 191.696)">
            <path id="Tracé_1" data-name="Tracé 1" d="M173.5-186.1c45,17,70.7,77.8,72.3,135.6S225,62.1,189,94.7c-36,32.5-85.7,42.7-128.9,49.3-43.3,6.7-80.3,9.8-129.6,8.5-49.4-1.2-111.2-6.9-131.2-38.2-20-31.4,1.7-88.5,18.5-139.9,16.9-51.4,28.8-97.2,58.4-117,29.5-19.8,76.7-13.6,132.4-23.8s120-36.8,164.9-19.7" fill="#0092f6"/>
          </g>
        </svg>
        

        <!--PRODUITS 3-->
        <div class="product">
          <div class="paragraph">
            <h4>Microphone</h4>
            <p>Un microphone (souvent appelé micro par apocope) est un transducteur électroacoustique, c'est-à-dire un appareil capable de convertir un signal acoustique en signal électrique1.</p>
            <a href="produit/produit3.php"><p>réserver</p></a>
          </div>
          <div class="card-one" >
            <div class="content">
                <h2>HyperX Quadcast</h2>
                <p></p>
            </div>
            <img src="image/micro.png" alt="">
          </div>
        </div>
        <!--PODUIT 4-->
        <div class="product">
          <div class="paragraph">
            <h4>Casque réalité mixte</h4>
            <p> le Hololens se définit comme un « ordinateur holographique autonome ». L’ensemble embarque en effet une série de processeurs ainsi que plusieurs capteurs permettant de détecter précisément les mouvements, l’espace et la position de l’utilisateur.</p>
            <a href="produit/produit4.php"><p>réserver</p></a>
          </div>
          <div class="card-one" >
          <div class="content">
              <h2>Ricoh Theta Z1 caméra 360°</h2>
              <p></p>
          </div>
          <img src="image/holo.png" alt="">
        </div>
      </div>
      
     


      <button id="togg1">Afficher plus</button>

      
      

    </section>

   <section id="all-product2">
      <div class="container">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="370.565" height="518.924" viewBox="0 0 370.565 518.924" id="blob3">
          <g id="Groupe_1" data-name="Groupe 1" transform="translate(189.391 264.594)">
            <path id="Tracé_1" data-name="Tracé 1" d="M143.4-188.8c31.5,44.4,38.6,99.9,37.7,148.9-.9,48.9-9.8,91.3-24.3,143.7S122.3,218.6,80.9,242.4c-41.5,23.8-104.3,9.1-154.2-18.7-50-27.8-87.1-68.8-103.9-113.7-16.8-45-13.4-94-6.6-144.1,6.8-50.2,16.9-101.5,48.1-146,31.1-44.5,83.4-82.2,137.5-84.4,54.1-2.1,110,31.2,141.6,75.7" fill="#0092f6"/>
          </g>
        </svg>
        <!--Produit1-->
        <div class="product">
          <div class="paragraph">
            <h4>PC Gaming</h4>
            <p>Un PC Gamer est conçu spécifiquement pour le jeu grâce à sa puissance et ses capacités supérieures à un ordinateur bureautique. Les composants ont été étudiés pour une utilisation intensive et pour gérer une importante consommation de ressources. </p>
            <a href="/produit/produit5.php"><p>réserver</p></a>
          </div>
          <div class="card-one" >
            <div class="content">
              <h2>PC DELL</h2>
              <p></p>
            </div>
            <img src="image/pcgaming.png" alt="">
          </div>
        </div>
        <!--Produit6-->
        <div class="product">
          <div class="paragraph">
            <h4>Webcam logitech</h4>
            <p>Une webcam est une caméra vidéo numérique connectée à un ordinateur et capable de capturer des vidéos et des photos, et de les transmettre sur Internet. La webcam a gagné en popularité lorsqu'elle a commencé à être utilisée avec des programmes de messagerie instantanée tels que MSN Messenger et Skype. </p>
            <a href="/produit/produit6.php"><p>réserver</p></a>
          </div>
          <div class="card-one" >
            <div class="content">
              <h2>Webcam LOGITECH<br> 4K</h2>
              <p></p>
            </div>
            <img src="image/webcam.png" alt="">
          </div>
        </div>
        <!--Produit3-->
        <div class="product">
          <div class="paragraph">
            <h4>Trépied</h4>
            <p>Support à trois pieds utilisé en cuisine pour soutenir une marmite au-dessus du feu. Par extension, n'importe quel support à trois pieds qui sert à stabiliser un objet.</p>
            <a href="/produit/produit7.php"><p>réserver</p></a>
          </div>
          <div class="card-one" >
            <div class="content">
              <h2>BENRO SLIM ALUMINIUM + </h2>
              <p></p>
            </div>
            <img src="image/trepied.png" alt="">
          </div>
        </div>
        <!--Produits4-->
        <div class="product">
          <div class="paragraph">
            <h4>Casque Gaming</h4>
            <p>Le casque VR vous plonge dans un monde virtuel pour une expérience immersive. Une technologie réservée aux adultes ou grands adolescents ! La VR pour Virtual Reality, ou RV pour Réalité Virtuelle, est désormais souvent complétée par l'AR pour Augmented Reality, ou RA pour Réalité Augmentée.</p>
            <a href="/produit/produit8.php"><p>réserver</p></a>
          </div>
          <div class="card-one" >
            <div class="content">
              <h2>STEELSERIES ARCTIS 5 </h2>
              <p></p>
            </div>
            <img src="image/casque.png" alt="">
          </div>
        </div>


      </div>
    </section>

    <footer>
      <div class="container">
        <div id="a-propos">
          <h5>à propos</h5>
          <p>L'IUT Gustave presente son nouveaux site de reservation de produit dessus vous pourrez reservez les objets que vous pourrez emprunter pour une utilisation profesionel ou personnel.</p>
        </div>

        <div id="aide">
          <h5>Nos produits</h5>
          <ul>
            <a href="produit/produit.php"><li>Casque VR</li></a>
            <a href="produit/produit2.php"><li>Camera 360</li></a>
            <a href="produit/produit3.php"><li>Microphone</li></a>
            <a href="produit/produit4.php"><li>Hololens</li></a>
            <a href="produit/produit5.php"><li>PC Gaming</li></a>
            <a href="produit/produit6.php"><li>Webcam</li></a>
            <a href="produit/produit7.php"><li>trepied</li></a>
            <a href="produit/produit8.php"><li>Casque Gaming</li></a>
          </ul>
        </div>

        <div id="contact">
          <h5>Nous Contacter</h5>
          <ul>
            <a href="http://iut.univ-gustave-eiffel.fr/"><li>IUT Gustave Eiffel</li></a>
            <a href="https://www.google.com/maps/place/IUT+De+Meaux+Universit%C3%A9+Gustave+Eiffel/@48.8961212,2.6615654,12z/data=!4m9!1m2!2m1!1sIUT+gustave+eiffel+meaux!3m5!1s0x47e8a11cceb9ee4f:0x143615de96b042c5!8m2!3d48.9548415!4d2.8779401!15sChhJVVQgZ3VzdGF2ZSBlaWZmZWwgbWVhdXiSAQNpdXQ"><li>17 Rue Jablinot, 77100 Meaux</li></a>
            <a href=""><li>adresse email </li></a>
            <a href=""><li>33(1).60.95.75.00</li></a>
            <a href=""><li>XX</li></a>
            <a href=""><li>XX</li></a>
            
          </ul>
        </div>



        

        <div id="reseaux">
          <h5>Campus</h5>
          <ul>
            <li>Vie de Campus</li>
            <li>L'offre de formation</li>
            <li>Parlement etudiant</li>
            <li>Ressources</li>
            <li>Campus de formation <br> et de recherche</li>
            
          </ul>
        </div>
      </div>
      <div id="end">
        <p>#&nbsp;Designed by Yacine Bouchemma</p>
        
      </div>
    </footer>

    
  
      <script src="script/app.js"> 

      

    
      
    </script>
         
</body>
</html>