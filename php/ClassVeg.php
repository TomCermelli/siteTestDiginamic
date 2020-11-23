<?php
include_once("ClassAnim.php");
Class Vegetarien extends Animal{
  protected $Kg;
  protected $cout;
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
    return $this->KgFruits;
  }
  public function cout(){
    return $this->cout=(1.2*log10(($this->Kg + 5)*2 + 1));
  }
  public function __toString(){
    return $this->nom." est un ".$this->espece." qui a un cri de type ".$this->cri." et qui a un coût journalier de :".round((1.2*log10(($this->Kg + 5)*2 + 1)), 2)." €";
  }
}
 ?>