<?php
namespace App\Models;
 class Projet
{
private $id;
private $titre;
private $prix;
private $description ;
private $delai;
public function __construct($id,$titre,$prix,$description,$delai)
{
    $this->id=$id;
    $this->titre=$titre;
    $this->prix=$prix;
    $this->description=$description;
    $this->delai=$delai;
}
public function getId(){return $this->id;}
public function getTitre(){return $this->titre;}
public function getPrix(){return $this->prix;}
public function getDescription(){return $this->description;}
public function getDelai(){return $this->delai;}
public function setId($id){return $this->id=$id;}
public function setTitre($titre){return $this->id=$titre;}
public function setPrix($prix){return $this->id=$prix;}
public function setDescription($description){return $this->id=$description;}
public function setDelai($delai){return $this->id=$delai;}
}
?>
