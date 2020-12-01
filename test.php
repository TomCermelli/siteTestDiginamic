<?php
require_once("php/ClassOis.php");
require_once("php/ClassVeg.php");
require_once("php/ClassZoo.php");
require_once("php/Classtigre.php");
$current = "test";
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8"> <!--afin de lire les caratères spéciaux comme le "é" "è"-->
  <title>Accueil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/head_foot.css">
  <link rel="stylesheet" href="css/test.css">

</head>
<body>
  <?php include "html/header.php" ?>

    <h1 class="title">Programation orienté objet</h1>
    <div class="zooContainer">
    <?php
      $NewZoo = new Zoo("MonZoo", 5);
      echo "<br>";
      $grandaigle = new Oiseau("sifflement", "Grandaigle", "aigle", 1 , 205); /*on a crée un objet oiseau*/
      echo $grandaigle; /*en faisant un echo il va aller chercher la methode __toString qui se trouve dans la classe Carnivore vu que la class Oiseau est */
      $NewZoo->ajouter($grandaigle);
      echo "<br>";
      $Cheeta= new Vegetarien("hurlement", "Cheeta", "chimpanzé",3);
      echo $Cheeta;
      $NewZoo->ajouter($Cheeta);
      echo "<br>";
      $Ann= new Vegetarien("beuglement", "Ann", "Autruche",5);
      echo $Ann;
      $NewZoo->ajouter($Ann);
      echo "<br>";
      echo "<br>";
      $Fantome= new Tigre("feulement", "Fantôme", "tigre du Bengale",4, 10);
      echo $Fantome;
      $NewZoo->ajouter($Fantome);
      echo "<br>";
      echo "<br>";
      $Azog= new Carnivore("sifflement", "Azog", "orque",70);
      echo $Azog;
      $NewZoo->ajouter($Azog);
      echo "<br>";
       $NewZoo->supprimer($Ann);
       echo "<br>";
      echo "<br>";
      $NewZoo->inventaire();
     ?>
   </div>

    <h2 class="title">Algorithme</h2>
    <div class="zooContainer">
      <?php
        $test_array = array(3, 0, 2, 5, -1, 4, 1, 50, -2);

         function insertion_Sort($tab)
        {
        	for($i=0;$i<count($tab);$i++){
        		$val = $tab[$i];
        		$j = $i-1;
        		while($j>=0 && $tab[$j] > $val){
        			$tab[$j+1] = $tab[$j];
        			$j--;
        		}
        		$tab[$j+1] = $val;
        	}
        return $tab;
        }

        echo "Le tableau de base :\n";
        echo implode(', ',$test_array );
        echo "<br />";
        echo "\nLe tableau trié :\n";
        print_r(insertion_Sort($test_array));
      ?>
    </div>
  <?php include "html/footer.html" ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
