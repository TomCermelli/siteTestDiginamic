<?php
//include("ClassCar.php");
Class Tigre extends Carnivore{
  protected $Rayure;
  public function __construct($cri, $nom, $espece, $Kg, $Rayure){
    parent::__construct($cri, $nom, $espece, $Kg);
    $this->Rayure = $Rayure;
  }
  public function setRayure($Rayure)
  {
    $this->Rayure = $Rayure;
  }
  public function getRayure()
  {
    return $this->Rayure;
  }
/*déjà défini dans la class Carnivore*/
  // public function cout(){
  //   return  ($this->Kg*10)*2 + 100;
  // }
  // public function __toString(){
  //   return $this->nom." est un ".$this->espece." qui a un cri de type ".$this->cri." et qui a un coût journalier de :".(($this->Kg * 10)*2 + 100)." €";
  // }
}
 ?>