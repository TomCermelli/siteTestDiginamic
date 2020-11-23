<?php
require "php/global_var.php";
// on se connecte à notre base
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//Afficher toute erreur de connexion
 if ($mysqli->connect_error) {
   die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
 }
?>

<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
    <meta charset="utf-8"> <!--afin de lire les caratères spéciaux comme le "é" "è"-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/form.css">
  </head>
  <body>
    <h1 class="MainTitle">Formulaire</h1>
    <!--On envoie un formulaire avec la methode POST, l'action nous permet d'indiquer quelle fichier on doit viser avec ce formulaire-->

    <form class="row form-container" method="post" action="php/controller.php">
    	<div class="col-xs-12">
    		<div class="styled-input wide">
    			<input type="email" name="email" placeholder="...." />
    			<label for="Email">Email :</label>
    		</div>
    	</div>
    	<div class="pad col-md-6 col-sm-12">
    		<div class="styled-input">
    			<input type="text" name="lastname" placeholder="...." required/>
					<label for="Nom">Nom :</label>
        </div>
    	</div>
    	<div class="pad col-md-6 col-sm-12">
    		<div class="styled-input" style="float:right;">
    			<input type="text" name="firstname" placeholder="...."  required/>
    			<label for="Prénom">Prénom :</label>
    		</div>
    	</div>
      <div class="col-xs-12 levelUser"> <!--Il s'agit des boutons radio pour choisir son niveau d'étude-->
        <span><strong>Quelle est votre plus haut niveau d'étude acquis ?</strong></span>
          <br>
          <span class="radioPos"><input type="radio" name="level" id="bac" value="Bac"></span>
          <label for="Bac">Bac</label>
          <span class ="radioPos"><input  type="radio" name="level" id="bac+2" value="Bac+2"></span>
          <label for="Bac+2">Bac+2</label>
          <input type="radio" name="level" id="master" value="Master">
          <label for="Master">Master</label>
          <input type="radio" name="level" id="doctorat" value="Doctorat">
          <label for="Doctorat">Doctorat</label>
          <input type="radio" name="level" id="autre" value="Autre">
          <label for="Autre">Autre</label>
        </div>
        <div class="col-xs-12">
          <div class="styled-input wide">
              <textarea id="extra" name="message" rows="3" cols="40"></textarea>
            <label for="extra">Pourquoi avoir choisie ce domaine d'activité ?</label><br>
          </div>
        </div>
        <div class="col-xs-12">
          <input class="btn-lrg submit-btn"type="submit" value="Submit" />
        </div>
    	</form>

      <h3 class="levelPos">Bac</h3>
      <table align="center" cellspacing = "5" cellpadding ="8">
        <thead>
          <tr class="tableHeader">
            <th class="tableLastname">Nom</th>
            <th class="tableFirstname">Prénom</th>
            <th class="">Message</th>
          </tr>
        </thead>
        <?php
          $requete1 = "SELECT lastname, firstname, message FROM user_info WHERE level_user = 'Bac' ORDER BY lastname ASC"; //la requete SQL
          $result1 = mysqli_query($mysqli, $requete1); // on envoie la query
          $resultCheck1 = mysqli_num_rows($result1); // on regarde s'il y a bien des données dans la BDD
          if($resultCheck1 > 0) { // si nous avons au moin 1 infos on envoie affiche les résultats sous forme de tableau
            while($row = mysqli_fetch_assoc($result1)){
              echo "<td>" . $row['lastname'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td class='tableMessage'>" . $row['message'] . "</td>";
              echo "</tr>";
            }
          }
        ?>
      </table>

      <h3 class="levelPos">Bac+2</h3>
      <table align="center" cellspacing = "5" cellpadding ="8">
        <thead>
          <tr class="tableHeader">
            <th class="tableLastname">Nom</th>
            <th class="tableFirstname">Prénom</th>
            <th class="">Message</th>
          </tr>
        </thead>
        <?php
          $requete1 = "SELECT lastname, firstname, message FROM user_info WHERE level_user = 'Bac+2' ORDER BY lastname ASC"; //la requete SQL
          $result1 = mysqli_query($mysqli, $requete1); // on envoie la query
          $resultCheck1 = mysqli_num_rows($result1); // on regarde s'il y a bien des données dans la BDD
          if($resultCheck1 > 0) { // si nous avons au moin 1 infos on envoie affiche les résultats sous forme de tableau
            while($row = mysqli_fetch_assoc($result1)){
              echo "<td>" . $row['lastname'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td class='tableMessage'>" . $row['message'] . "</td>";
              echo "</tr>";
            }
          }
        ?>
      </table>

      <h3 class="levelPos">Master</h3>
      <table align="center" cellspacing = "5" cellpadding ="8">
        <thead>
          <tr class="tableHeader">
            <th class="tableLastname">Nom</th>
            <th class="tableFirstname">Prénom</th>
            <th class="">Message</th>
          </tr>
        </thead>
        <?php
          $requete1 = "SELECT lastname, firstname, message FROM user_info WHERE level_user = 'Master' ORDER BY lastname ASC"; //la requete SQL
          $result1 = mysqli_query($mysqli, $requete1); // on envoie la query
          $resultCheck1 = mysqli_num_rows($result1); // on regarde s'il y a bien des données dans la BDD
          if($resultCheck1 > 0) { // si nous avons au moin 1 infos on envoie affiche les résultats sous forme de tableau
            while($row = mysqli_fetch_assoc($result1)){
              echo "<td>" . $row['lastname'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td class='tableMessage'>" . $row['message'] . "</td>";
              echo "</tr>";
            }
          }
        ?>
      </table>

      <h3 class="levelPos">Doctorat</h3>
      <table align="center" cellspacing = "5" cellpadding ="8">
        <thead>
          <tr class="tableHeader">
            <th class="tableLastname">Nom</th>
            <th class="tableFirstname">Prénom</th>
            <th class="">Message</th>
          </tr>
        </thead>
        <?php
          $requete1 = "SELECT lastname, firstname, message FROM user_info WHERE level_user = 'Doctorat' ORDER BY lastname ASC"; //la requete SQL
          $result1 = mysqli_query($mysqli, $requete1); // on envoie la query
          $resultCheck1 = mysqli_num_rows($result1); // on regarde s'il y a bien des données dans la BDD
          if($resultCheck1 > 0) { // si nous avons au moin 1 infos on envoie affiche les résultats sous forme de tableau
            while($row = mysqli_fetch_assoc($result1)){
              echo "<td>" . $row['lastname'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td class='tableMessage'>" . $row['message'] . "</td>";
              echo "</tr>";
            }
          }
        ?>
      </table>

      <h3 class="levelPos">Autre</h3>
      <table align="center" cellspacing = "5" cellpadding ="8">
        <thead>
          <tr class="tableHeader">
            <th class="tableLastname">Nom</th>
            <th class="tableFirstname">Prénom</th>
            <th class="">Message</th>
          </tr>
        </thead>
        <?php
          $requete1 = "SELECT lastname, firstname, message FROM user_info WHERE level_user = 'Autre' ORDER BY lastname ASC"; //la requete SQL
          $result1 = mysqli_query($mysqli, $requete1); // on envoie la query
          $resultCheck1 = mysqli_num_rows($result1); // on regarde s'il y a bien des données dans la BDD
          if($resultCheck1 > 0) { // si nous avons au moin 1 infos on envoie affiche les résultats sous forme de tableau
            while($row = mysqli_fetch_assoc($result1)){
              echo "<td>" . $row['lastname'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td class='tableMessage'>" . $row['message'] . "</td>";
              echo "</tr>";
            }
          }
        ?>
    </table>
  </body>
</html>
