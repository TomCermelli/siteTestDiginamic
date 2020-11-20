<?php
$string1 = '"Bonjour';

if(preg_match('/^[^@&"()!_$*€£`+=\/;?#<>0-9]+$/',$string1)){
  echo "La syntaxe est correct";
}
else {
 echo "C'est pas bon";
}

?>

<?php
    //On vérifie qu'il s'agit bien d'un formulaire
    $regex =  "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {



   //identifiants mysql qu'on stock dés le début
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = "diginamic"; //nom de la database qu'on va utiliser

   // fonction pour enlever certain caractère à l'envoie de donnée
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


   if (!empty($lastname) && preg_match("/^[A-Za-z '-]+$/",$lastname)
   && !empty($firstname)
   && strlen($firstname) <= 20
   && preg_match("/^[A-Za-z '-]+$/",$firstname)
   && !empty($email)
   && filter_var($email, FILTER_VALIDATE_EMAIL)
   && !empty($level)
   && !empty($message)){
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
        catch(PDOException $e){
          echo 'Erreur : '.$e->getMessage();
        }
                          }
        if($statement->execute()){
        print "Bonjour " . $firstname . "!, merci d'avoir pris le temps de répondre à ce questionnaire ";
        }
        else{
        echo "Certains champs n'ont pas des données valides, veuillez réessayer";
        // print $mysqli->error;
        }
}

?>



Pour l'envoi (SMTP) :

o	nom du serveur : smtps.numericable.fr

o	port : 465

o	utilisation : SSL/TLS

o	adresse e-mail complète suivie de par exemple @numericable.fr comme nom de compte

o	mot de passe : normal
