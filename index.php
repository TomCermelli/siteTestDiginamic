<?php
$current = "index";
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8"> <!--afin de lire les caratères spéciaux comme le "é" "è"-->
  <title>Accueil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/head_foot.css">
  <link rel="stylesheet" href="css/index.css">

</head>
<body>
  <?php include "html/header.php" ?>
  <div class="bodyContainer">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/carou1.jpg" alt="Premier slide" height="1080">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/carou2.jpg" alt="Second slide" height="1080">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/carou3.jpg" alt="Troisième slide" height="1080">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="techContainer">
      <div class="techPosition">
        <img class="logoSize" src="assets/html_logo.jpg" alt="logo HTML">
        <p class="techText">
          J'ai utilisé HTML pour faire toute la structure de ce site (essentiellement avec les div). C'est de cette manière que j'ai pus établir mon CSS par la suite.
        </p>
      </div>
      <div class="techPosition">
        <img class="logoSize" src="assets/css_logo.jpg" alt="logo CSS">
        <p class="techText">
          Le CSS ( Cascading Style Sheets ) comme son nom l'indique m'a servie à mettre en place tout l’aspect esthétique du site ( placement, couleur, bordure etc...).
        </p>
      </div>
      <div class="techPosition">
        <img class="logoSize" src="assets/js_logo.png" alt="logo JS">
        <p class="techText">
          J'ai utilisé HTML pour faire toute la structure de ce site. C'est de cette manière que j'ai pus établir mon CSS par la suite
        </p>
      </div>
    </div>
    <div class="techContainer">
      <div class="techPosition col-3">
        <img class="logoSize" src="assets/bootstrap_logo.png" alt="logo Bootstrap">
        <p class="techText">
          Bootstrap m’a était utilise afin de mettre en place le carrousel que l’on peut voir sur la page d’accueil, ainsi que la navigation que l’on trouve sur toute les pages.
          Le placement des technologies « Bootstrap » et  « PHP » ont était placé grâce aux classes inhérente de Bootstrapt (col-md-6 , active etc...)
        </p>
      </div>
      <div class="techPosition col-3">
        <img class="logoSize" src="assets/php_logo.png" alt="logo PHP">
        <p class="techText">
          PHP m’a était très utile étant donnée que c’est avec cette technologie que j’ai fais mes accès à ma base de données.
          C’est également avec lui que j’ai pus faire mon formulaire de contact et mon sondage,  la page test quand à elle permet de mettre en avant des exercices que j’ai effectué en PHP ( programmation objet, algorithme ).
        </p>
      </div>
    </div>
    <div class="heroContainer">
      <div class="col-6 pad">
        <img class="w-100" src="assets/espace_de_travail.jpg" alt="espace de travail" >
      </div>
      <div class="pad col-6">
        <div class="heroText">
          <p class="heroText">
            J'ai commencé le code en faisant des tutoriels HTML/CSS sur Codeacademy et Openclassroom, c’est en commençant de cette manière que Je me suis rendu compte que le code était amusant.
            C’est pour quoi j'ai fais le choix de me former d’avantage afin d’en apprendre plus sur ce monde.
        </div>
      </div>
    </div>
    <div class="heroContainer">
      <div class="col-6 heroText">
        <div class="heroText">
          <p class="techText">
            Eo adducta re per Isauriam, rege Persarum bellis finitimis inligato repellenteque a conlimitiis suis ferocissimas gentes, quae mente quadam versabili hostiliter eum saepe incessunt et in nos arma moventem aliquotiens iuvant,
            Nohodares quidam nomine e numero optimatum, incursare Mesopotamiam quotiens copia dederit ordinatus, explorabat nostra sollicite.
          </p>
        </div>
      </div>
      <div class="col-6 pad">
        <img class="w-100" src="assets/relax.jpg" alt="relax image">
      </div>
    </div>
    <?php include "html/footer.html" ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
