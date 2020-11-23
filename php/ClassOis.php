<?php
include_once("ClassCar.php");
Class Oiseau extends Carnivore{
  protected $Enverg;
  public function __construct($cri, $nom, $espece, $Kg, $Enverg){
    parent::__construct($cri, $nom, $espece, $Kg);
    $this->Enverg = $Enverg;
  }
  public function setEnverg($Enverg)
  {
    $this->Enverg = $Enverg;
  }
  public function getEnverg()
  {
    return $this->Enverg;
  }
/*déjà défini dans la class Carnivore*/
  // public function cout(){
  //   return  ($this->Kg*10)*2 + 100;
  // }
  // public function __toString(){
  //   return $this->nom." est un ".$this->espece." qui a un cri de type ".$this->cri." et qui a un coût journalier de :".round((($this->Kg * 10)*2 + 100), 2)." €";
  // }
}
 ?>