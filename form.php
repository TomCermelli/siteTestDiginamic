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
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--On envoie un formulaire avec la methode POST, l'action nous permet d'indiquer quelle fichier on doit viser avec ce formulaire-->
    <form method="post" action="php/controller.php">
      <section class="userName"> <!--cette section représente le nom/prénom de l'user-->
          <label for="Nom">Nom :</label>
    			<input type="text" name="lastname" placeholder="Entrez votre nom" required/>
          <label for="Prénom">Prénom :</label>
    			<input type="text" name="firstname" placeholder="Entrez votre Prénom"  required/>
      </section>
      <section class="mail">
          <label for="Email">Email :</label>
    			<input type="email" name="email" placeholder="Entrer votre Email" />
      </section>
      <section class="levelUser"> <!--Il s'agit des boutons radio pour choisir son niveau d'étude-->
          <span>Quelle est votre plus haut niveau d'étude acquis ?</span>
          <br>
          <input type="radio" name="level" id="bac" value="Bac">
          <label for="Bac">Bac</label>
          <input type="radio" name="level" id="bac+2" value="Bac+2">
          <label for="Bac+2">Bac+2</label>
          <input type="radio" name="level" id="master" value="Master">
          <label for="Master">Master</label>
          <input type="radio" name="level" id="doctorat" value="Doctorat">
          <label for="Doctorat">Doctorat</label>
          <input type="radio" name="level" id="autre" value="Autre">
          <label for="Autre">Autre</label>
      </section>
      <section class="userMessage">
        <label for="extra">Pourquoi avoir choisie ce domaine d'activité?</label><br>
        <textarea id="extra" name="message" rows="3" cols="40"></textarea>
      </section>
      <input type="submit" value="Submit" />
    </form>

    <h3>Bac</h3>
    <?php
      $requete1 = "SELECT lastname, firstname, message FROM user_info WHERE level_user = 'Bac'"; //la requete SQL
      $result1 = mysqli_query($mysqli, $requete1); // on envoie la query
      $resultCheck1 = mysqli_num_rows($result1); // on regarde s'il y a bien des données dans la BDD
      if($resultCheck1 > 0) { // si nous avons au moin 1 infos on envoie affiche les résultats sous forme de tableau

        echo '<table align="center" cellspacing = "5" cellpadding ="8">
        <tr><td align="left"><b>Nom</b></td></tr>
        <tr><td align="left"><b>Prénom</b></td></tr>
        <tr><td align="left"><b>Message</b></td></tr>
        </table>';
        while($row = mysqli_fetch_assoc($result1)){
          echo '<tr><td align="left"</tr>' .
          $row['lastname'] . '<tr><td align="left"</tr>' .
          $row['firstname'] . '<tr><td align="left"</tr>' .
          $row['message'] . '<tr><td align="left"</tr>';
          echo "<br />";
        }
      }
    ?>
    <h3>Bac+2</h3>

    <h3>Master</h3>

    <h3>Doctorat</h3>

    <h3>Autre</h3>

  </body>
</html>
