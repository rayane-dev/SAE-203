<?php 
    try 
    {
        $bdd = new PDO('mysql:host=tpmp;dbname=sae203;','root','');
    }
    catch(PDOException $error)
    {
        die('Erreur : '.$error->getMessage());
    }
