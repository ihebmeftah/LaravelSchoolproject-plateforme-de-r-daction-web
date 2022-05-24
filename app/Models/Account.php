<?php
namespace App\Models;
 class Account
{
private $id;
private $name;
private $github;
private $phone ;
private $descp;
public function __construct($id,$name,$github,$phone,$descp)
{
    $this->id=$id;
    $this->name=$name;
    $this->github=$github;
    $this->phone=$phone;
    $this->descp=$descp;
}
public function getId(){return $this->id;}
public function getname(){return $this->name;}
public function getgithub(){return $this->github;}
public function getphone(){return $this->phone;}
public function getdescp(){return $this->descp;}
public function setId($id){return $this->id=$id;}
public function setname($name){return $this->id=$name;}
public function setgithub($github){return $this->id=$github;}
public function setphone($phone){return $this->id=$phone;}
public function setdescp($descp){return $this->id=$descp;}
}
?>
