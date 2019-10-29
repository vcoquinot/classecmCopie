<?php require_once("connexion_bdd.php");
include ("fonctions_francais.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="css/classecm.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>conjugaison : present premier groupe</title>
</head>
<body>
  
  <header class="container d-flex align-items-center flex-column">
      <h1>Le présent du 1er groupe</h1>
      <!-- Subheading -->
      <p class="subheading font-weight-light mb-4">Il te suffit de prendre le radical du verbe et y ajouter les terminaisons du présent.</p>
      <!-- Image -->
      <img class="mb-4" src="img/avataaars.svg" alt="">
  </header>

  <main class="background-primary">
    <section class="text-center mb-4">
      <h2>À TOI DE JOUER</h2>
      <form action="cible/conjugaison.php" method="get">
      <?php
      //BDD random question
      $question = $bdd->query("SELECT intitule_question, id_question FROM question WHERE id_matiere = 2 && id_theme = 20 ORDER BY RAND() LIMIT 1");
      $donnees = $question->fetch();
      ?>
      <!--question display -->
      <p class="font-weight-bold"><?php echo $donnees['intitule_question'];?></p>
            <?php
            $_SESSION['id_question'] = $donnees['id_question'];            
            $_SESSION['intitule_question'] = $donnees['intitule_question'];
            $question->closeCursor();?>
    
          <!--Formulaire réponse-->
         <?php afficherFormulaireConjugaison(); ?>
         <input type="hidden" name="url" value="present_1.php">
        </form>
          </div>
        </div>
        <div class="row">

        

      </main>


    </section>