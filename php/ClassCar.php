<?php
include_once("ClassAnim.php");
Class Carnivore extends Animal{
  protected $Kg;
  public function __construct($cri, $nom, $espece, $Kg){
    parent::__construct($cri, $nom, $espece);
    $this->Kg = $Kg;
  }
  public function setKg($Kg)
  {
    $this->Kg = $Kg;
  }
  public function getKg()
  {
    return $this->Kg;
  }
  public function cout(){
    return  ($this->Kg*10)*2 + 100;
  }
  public function __toString(){
    return $this->nom." est un ".$this->espece." qui a un cri de type ".$this->cri." et qui a un coût journalier de :".round((($this->Kg * 10)*2 + 100), 2)." €";
  }
}
 ?>