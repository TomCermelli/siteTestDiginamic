<?php
Class Zoo {
 private $nomZoo;
 private $placeZoo;
 private $animaux = array();
 private $coutTotal=0;
 public function __construct($nomZoo, $placeZoo){
   $this->nomZoo = $nomZoo;
   $this->placeZoo = $placeZoo;
 }
 public function ajouter($newAnimal){
   if (count($this->animaux)<$this->placeZoo){
     $this->animaux[]=$newAnimal;
     echo "<br>";
     echo "Le cout total pour le Zoo est de:".round(($this->coutTotal += $newAnimal->cout()), 2)." euros";
     echo "<br>";
     echo "Il y a ".count($this->animaux)." animaux dans le zoo.";
     echo "<br>";
   } else {
     echo "Le zoo est plein !!!";
   }
 }
 public function supprimer($newAnimal){
     unset($this->animaux[array_search($newAnimal, $this->animaux)]); //vide une case sans la supprimer//
     array_values($this->animaux);//re-index le tableau, pour eliminer la case vide//
     echo "<br>";
     echo "Le cout total pour le Zoo est de:".round(($this->coutTotal -= $newAnimal->cout()), 2)." euros";
     echo "<br>";
     echo "Il y a ".count($this->animaux)." animaux dans le zoo.";
     echo "<br>";
 }
 public function inventaire(){
   echo "Inventaire du Zoo:";
   echo "<br>";
   echo implode("<br> ", $this->animaux);
 }
}
 ?>