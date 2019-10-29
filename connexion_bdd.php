<?php
  //connexion BDD
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=cm;charset=utf8', 'root' , '');
    }
  catch(Exception $e){
    die('Erreur : '.$e->getMessage());
  }

  setlocale(LC_TIME, "fr_FR");
?>