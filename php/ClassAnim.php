<?php
abstract class Animal
{
  protected $cri;
  protected $nom;
  protected $espece;
  public function __construct($cri, $nom, $espece){
    $this->cri = $cri;
    $this->nom = $nom;
    $this->espece = $espece;
  }
  public function setCri($cri)
  {
    $this->cri = $cri;
  }
  public function getCri()
  {
    return $this->cri;
  }
  public function setNom($nom)
  {
    $this->nom = $nom;
  }
  public function getNom()
  {
    return $this->nom;
  }
  public function setEspece($espece)
  {
    $this->espece = $espece;
  }
  public function getEspece()
  {
    return $this->espece;
  }
  Abstract public function cout();
}
?>