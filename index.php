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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="..." alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="..." alt="Third slide">
        </div>
      </div>
    </div>
    <div class="techContainer">
      <div class="techPosition">
        <img class="logoSize" src="assets/html_logo.jpg" alt="logo HTML">
        <p class="techText">
          J'ai utilisé HTML pour faire toute la structure de ce site. C'est de cette manière que j'ai pus établir mon CSS par la suite
        </p>
      </div>
      <div class="techPosition">
        <img class="logoSize" src="assets/css_logo.jpg" alt="logo CSS">
        <p class="techText">
          J'ai utilisé HTML pour faire toute la structure de ce site. C'est de cette manière que j'ai pus établir mon CSS par la suite
        </p>
      </div>
      <div class="techPosition">
        <img class="logoSize" src="assets/js_logo.jpg" alt="logo JS">
        <p class="techText">
          J'ai utilisé HTML pour faire toute la structure de ce site. C'est de cette manière que j'ai pus établir mon CSS par la suite
        </p>
      </div>
    </div>
    <div class="techContainer">
      <div class="techPosition col-3">
        <img class="logoSize" src="assets/bootstrap_logo.png" alt="logo Bootstrap">
        <p class="techText">
          J'ai utilisé HTML pour faire toute la structure de ce site. C'est de cette manière que j'ai pus établir mon CSS par la suite
        </p>
      </div>
      <div class="techPosition col-3">
        <img class="logoSize" src="assets/php_logo.jpg" alt="logo PHP">
        <p class="techText">
          J'ai utilisé HTML pour faire toute la structure de ce site. C'est de cette manière que j'ai pus établir mon CSS par la suite
        </p>
      </div>
    </div>
    <div class="heroContainer">
      <div class="col-6 pad">
        <img src="assets/espace_de_travail.jpg" alt="espace de travail" width="100%">
      </div>
      <div class="pad col-6">
        <div class="heroText">
          <p class="heroText">
            J'ai commencé le code en faisant des tutoriels HTML CSS et tout et tout
          </p>
        </div>
      </div>
    </div>
    <div class="heroContainer">
      <div class="col-6 heroText">
        <div class="heroText">
          <p class="techText">
            J'ai commencé le code en faisant des tutoriels HTML CSS et tout et tout
          </p>
        </div>
      </div>
      <div class="col-6 pad">
        <img src="assets/relax.jpg" alt="relax image" width="100%">
      </div>
    </div>
    <?php include "html/footer.html" ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
