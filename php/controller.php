<?php
    //On vérifie qu'il s'agit bien d'un formulaire
  if($_SERVER["REQUEST_METHOD"] == "POST") {

   //identifiants mysql qu'on stock dés le début
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = "diginamic"; //nom de la database qu'on va utiliser

   // fonction pour enlever certain caractère à l'envoie de donnée, par exemple les "/" ou encore "<,>"
   function validation($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

   $lastname = validation($_POST["lastname"]); //on stock le nom que l'on vient de recevoir dans la variable $name
   $firstname = validation($_POST["firstname"]); // idem pour les autres
   $email = validation($_POST["email"]);
   $level = $_POST["level"];
   $message = validation($_POST["message"]);

   if (preg_match("/^[A-Za-z '-]+$/",$lastname) //dans cette condition on essaie de voir si les champs sont valides. Il n'y a pas de vérif sur les champs vide vu à tout les champs vu que c'est déterminer dans le HTML
   && strlen($firstname) <= 20
   && preg_match("/^[A-Za-z '-]+$/",$firstname)
   && filter_var($email, FILTER_VALIDATE_EMAIL)
   && !empty($level)
   ){
    try{
       // On ouvre une nouvelle connexion au serveur MySQL grâce aux identifiants qu'on a définis plus haut
       $mysqli = new mysqli($host, $username, $password, $database);
       //Afficher toute erreur de connexion
        if ($mysqli->connect_error) {
          die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }
       //préparer la requête d'insertion SQL
       $statement = $mysqli->prepare("INSERT INTO user_info (lastname, firstname, email, level_user, message) VALUES(?, ?, ?, ?, ?)");
       //Associer les valeurs et exécuter la requête d'insertion
       $statement->bind_param('sssss', $lastname, $firstname, $email, $level, $message);
      }
      catch(mysqli_sql_exception $e){ // on envoie un message d'erreur en cas d'echec d'envoie de donnée
          echo 'Erreur : '.$e->getMessage();
      }
      if($statement->execute()){ //si tout se passe bien on renvoie un message à l'utilisateur
      print "Bonjour " . $firstname . "!, merci d'avoir pris le temps de répondre à ce questionnaire ";
      }
    }
    else{ // si nous ne rentront pas dans la condition original , nous avons un message demandant à l'utilisateur de remplir correctement le formulaire
      echo "Certains champs n'ont pas des données valides, veuillez réessayer";
    }
  }
?>
