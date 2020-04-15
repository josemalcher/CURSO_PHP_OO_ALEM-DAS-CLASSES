<?php

class Product{
    var $name;
    var $description;
    var $price;

    public function getDescription():String
    {
        return $this->description;
    }
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getPrice():float
    {
        return $this->price;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    function setName($name){
     $this->name = $name;
    }
    function getName():String{
        return strtoupper($this->name);
    }
    function get(): String
    {
        return "{$this->getName()} # {$this->getDescription()} $ {$this->getPrice()} <hr>";
    }
}

$tv = new Product();
$tv->setName("TV Samsaunga");
$tv->setPrice(4.500);
$tv->setDescription("Smart TV");
echo $tv->get();

$geladeira = new Product();
$geladeira->setName("Geladeira Bill Lux");
$geladeira->setPrice(500) ;
$geladeira->setDescription("Duas Portas - qualidade");

echo $geladeira->get();